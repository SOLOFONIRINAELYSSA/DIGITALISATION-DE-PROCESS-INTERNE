<?php

namespace App\Http\Controllers;

use App\Models\Entreprise;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\EntrepriseFormRequest;
use App\Models\Calendrier2;

class EntrepriseController extends Controller
{

    public function index()
    {
        $entreprises = Entreprise::query()->get();

        $entreprises = Entreprise::all();

        $events = Calendrier2::all();
        
        return view('admin.parametre.index', [
            'entreprises' => $entreprises,
            'entreprises' => $entreprises,
            'events' => $events
        ]);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        //
    }

    public function update(EntrepriseFormRequest $request, string $CodeEntreprise)
    {
        try {
            $entrepriseData = $request->validated();

            // Vérification si une nouvelle image a été téléchargée
            if ($request->hasFile('images')) {
                $file = $request->file('images');
                $filename = time() . '_' . $file->getClientOriginalName(); // Crée un nom unique pour le fichier
                $file->move(public_path('images'), $filename); // Déplace le fichier dans le dossier public/images
                $entrepriseData['images'] = 'images/' . $filename; // Enregistre le chemin de l'image dans la base de données
            }

            // Mise à jour des informations dans la table employes
            DB::table('entreprises')
                ->where('CodeEntreprise', $CodeEntreprise)
                ->update($entrepriseData);

            return to_route('admin.parametres.index')->with('success', 'Entreprise modifié avec succès!');

        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Une erreur s\'est produite. Veuillez réessayer.');
        }
    }

    public function destroy(string $id)
    {
        //
    }
}
