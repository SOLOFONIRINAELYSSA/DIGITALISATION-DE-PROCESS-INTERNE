<?php

namespace App\Http\Controllers;

use App\Http\Requests\Calendrier2FormRequest;
use App\Models\Calendrier2;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;

class Calendrier2Controller extends Controller
{
    // Afficher tous les événements
    public function index()
    {
        $events = Calendrier2::all() ?? [];
        
        return view('admin.calendrier.pivotCal2', compact('events'));
    }

    // Ajouter un nouvel événement
    public function store(Calendrier2FormRequest $request)
    {
        try {
            $calendries = $request->validated();

            DB::table('calendrier2s')->insert($calendries);

            return to_route('admin.calendrier2.index')->with('success', 'Calendrie ajouté avec succès!');

        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Une erreur s\'est produite. Veuillez réessayer.');
        }
    }

    // Supprimer un événement
    public function destroy(string $id)
    {
        $employe = DB::table('calendrier2s')->where('id', $id)->first();

        DB::table('calendrier2s')
            ->where('id', $id)
            ->delete();

        return redirect()->back();
    }
}
