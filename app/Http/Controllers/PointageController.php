<?php

namespace App\Http\Controllers;

use App\Models\Calendrier2;
use App\Models\Pointage;
use Illuminate\Http\Request;

class PointageController extends Controller
{
    public function index()
    {
         $pointage = Pointage::all();

         $events = Calendrier2::all();

         return view('admin.pointage.index', compact('pointage', 'events'));
    }
    public function create()
    {
        //
    }
    public function store(Request $request)
    {
                // Validation de l'ID de l'employé
            $request->validate([
                'numEmp' => 'required|string|exists:employes,numEmp', // Assurez-vous que l'ID existe dans la table employes
            ]);

            // Créer une nouvelle entrée dans la table pointage
            $pointage = new Pointage();
            $pointage->numEmp = $request->numEmp; // Assurez-vous que ce champ correspond à la colonne de votre table
            $pointage->save(); // Sauvegarde l'entrée

            // Retourner une réponse JSON
            return response()->json(['success' => true, 'message' => 'Pointage ajouté avec succès.']);
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
        //
    }
}
