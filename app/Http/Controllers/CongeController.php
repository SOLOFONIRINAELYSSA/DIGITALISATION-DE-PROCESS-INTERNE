<?php

namespace App\Http\Controllers;

use App\Http\Requests\CongeFormRequest;
use App\Models\Calendrier2;
use App\Models\Conge;
use App\Models\Employe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CongeController extends Controller
{

    // public function miseAJourSolde($numEmp)
    // {
    //     $conge = new Conge();
    //     $solde = $conge->calculerSoldeAnnuel($numEmp);
    
    //     // Mettre à jour le solde et les jours reportés dans la base de données
    //     Employe::where('numEmp', $numEmp)->update([
    //         'solde' => $solde['solde'],           // Nouveau solde avec les jours reportés
    //         'jours_reportes' => $solde['jours_reportes'] // Jours non pris reportés pour l'année prochaine
    //     ]);
    // }

    public function getCongeCount()
    {
        // Compter toutes les permissions dans la base de données
        $totalConges = Conge::count();

        // Récupérer le dernier nombre de permissions consultées depuis la session
        $lastCongeCount = session('last_conge_count', 0);

        // Calculer le nombre de nouvelles permissions ajoutées depuis la dernière consultation
        $newConge = $totalConges - $lastCongeCount;
       

        // Si de nouvelles permissions sont ajoutées, renvoyer cette différence, sinon afficher 0
        $displayCounte = $newConge > 0 ? $newConge : 0;

        return response()->json(['count' => $displayCounte]);
    }
    
    public function resetCongeCount()
    {
        // Mettre à jour le dernier nombre de permissions consultées dans la session
        session(['last_conge_count' => Conge::count()]);

        return response()->json(['success' => true]);
    }

    public function showconge()
    {
        $conges = Conge::all();
        $conge = Conge::orderBy('id', 'DESC')->get();
        $events = Calendrier2::all();
           
        return view('admin.conge.showconge', compact('events', 'conge', 'conges'));
    }

    public function index()
    {
        $conges = Conge::all();
        $events = Calendrier2::all();

        return view('admin.conge.index', compact('events', 'conges'));
    }


    public function create()
    {
        //
    }


    public function store(CongeFormRequest $request)
{
    $numEmp = $request->input('numEmp');
    $joursDemandes = $request->input('nbrjr');
    $dateActuelle = now(); // Date actuelle pour gérer les années

    // Récupérer le dernier congé de l'employé
    $historiqueConge = Conge::where('numEmp', $numEmp)->orderBy('created_at', 'desc')->first();

    $currentYear = $dateActuelle->year;
    $lastYear = $currentYear - 1;

    // Initialiser solde et jours reportés
    if (!$historiqueConge || $historiqueConge->dateFin < $lastYear . '-12-31') {
        // L'employé n'a pris aucun congé l'année précédente, il a 45 jours (30 + 15 reportés)
        $solde = 30; // 30 jours pour l'année actuelle + 15 jours reportés
        $joursReportes = 0;
    } 
    
    else {
        // Utiliser les valeurs du dernier congé pris cette année
        $solde = $historiqueConge->solde ?? 30;
        $joursReportes = $historiqueConge->jours_reportes ?? 0;
    }

    // Vérifier si le solde est suffisant pour les jours demandés
    if ($joursDemandes > ($solde + $joursReportes)) {
        return response()->json(['error' => 'Solde insuffisant pour ce congé.'], 400);
    }

      // Calculer le nouveau solde et ajuster les jours reportés
      if ($joursDemandes <= $joursReportes) {
        $joursReportes -= $joursDemandes; // Utiliser les jours reportés
    } else {
        $joursRestants = $joursDemandes - $joursReportes; // Jours à soustraire du solde
        $joursReportes = 0; // Réinitialiser les jours reportés
        $solde -= $joursRestants; // Ajuster le solde
    }
 
    // Enregistrer le congé avec les nouveaux soldes
    Conge::create([
        'numEmp' => $numEmp,
        'nbrjr' => $joursDemandes,
        'solde' => $solde,
        'jours_reportes' => $joursReportes,
        'dateDebut' => $request->input('dateDebut'),
        'dateFin' => $request->input('dateFin'),
        'motif' => $request->input('motif'),
        'nomApprobateur' => $request->input('nomApprobateur'),
        'typeConge' => $request->input('typeConge'),
        'created_at' => $dateActuelle,
        'updated_at' => $dateActuelle
    ]);

    return to_route('admin.conges.index');
}



    public function show(string $id)
    {
        //
    }
    public function edit(string $id)
    {
        //
    }
    public function update(Request $request, string $id)
    {
        //
    }
   
    public function destroy(string $id)
    {
        // $deleted = DB::table('conges')
        //         ->where('id', $id)
        //         ->delete();

        // if ($deleted) {
        //     return redirect()->back()->with('success', 'Employé supprimé avec succès.');
        // } else {
        //     return redirect()->back()->with('error', 'Erreur lors de la suppression de l\'employé.');
        // }
        $deleted = DB::table('conges')
                ->where('id', $id)
                ->delete();

        if ($deleted) 
        {
            // Mettre à jour la session avec le nouveau nombre de congés après la suppression
            session(['last_conge_count' => DB::table('conges')->count()]);

            // Retourner une réponse avec un message de succès
            return redirect()->back()->with('success', 'Employé supprimé avec succès.');
        } 
        else 
        {
            // Retourner une réponse avec un message d'erreur
            return redirect()->back()->with('error', 'Erreur lors de la suppression de l\'employé.');
        }
    }
}
