<?php

namespace App\Http\Controllers;

use App\Http\Requests\PermissionFormRequest;
use App\Models\Calendrier2;
use App\Models\Employe;
use App\Models\Entreprise;
use App\Models\Permission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class PermissionController extends Controller
{

    // public function getPermissionCount()
    // {
    //     $permissionCount = Permission::count();
    //     return response()->json(['count' => $permissionCount]);
    // }

    public function detaillepermission(int $id)
    {
        $events = Calendrier2::all();
        $detailles = Permission::with('employes') // Charge la relation employes
            ->where('id', $id) // Utilisez 'id' si c'est la clé primaire
            ->firstOrFail();

        return view('admin.permission.detaillepermission', compact('events', 'detailles'));
    }

    public function getPermissionCount()
    {
        // Compter toutes les permissions dans la base de données
        $totalPermissions = Permission::count();

        // Récupérer le dernier nombre de permissions consultées depuis la session
        $lastPermissionCount = session('last_permission_count', 0);

        // Calculer le nombre de nouvelles permissions ajoutées depuis la dernière consultation
        $newPermissions = $totalPermissions - $lastPermissionCount;
       

        // Si de nouvelles permissions sont ajoutées, renvoyer cette différence, sinon afficher 0
        $displayCount = $newPermissions > 0 ? $newPermissions : 0;

        return response()->json(['count' => $displayCount]);
    }
    
    public function resetPermissionCount()
    {
        // Mettre à jour le dernier nombre de permissions consultées dans la session
        session(['last_permission_count' => Permission::count()]);

        return response()->json(['success' => true]);
    }
    

    public function showpermission()
    {
        $permissions = Permission::orderBy('id', 'DESC')->get();
        $events = Calendrier2::all();
           
        return view('admin.permission.showpermission', compact('events', 'permissions'));
    }

    public function index()
    {
        $entreprises = Entreprise::all();

        $employes = Employe::all();

        $events = Calendrier2::all();
        
        // Récupérer les employés avec leurs permissions
        $employes = Employe::whereIn('numEmp', Permission::pluck('numEmp'))->with('permissions')->get();
        
        return view('admin.permission.index', [
            'entreprises' => $entreprises,
            'employes' => $employes,
            'events' => $events
        ]);
    }

    public function create()
    {
        //
    }

    public function store(PermissionFormRequest $request)
    {
        // try {
            // Valider et récupérer les données de la requête
            $permissionData = $request->validated();
    
            // Créer une nouvelle instance de Permission et remplir les données
            $permission = new Permission($permissionData);
    
            // Enregistrer la permission, ce qui va également remplir les timestamps
            $permission->save();
    
            // Mettre à jour la date de la dernière consultation dans la session
            session(['last_permissions_viewed_at' => now()]);
    
            // Rediriger vers la liste des permissions
            return to_route('admin.permissions.index')->with('success', 'Permission ajoutée avec succès.');
    
        // } catch(\Throwable $th) {
            // En cas d'erreur, rediriger avec un message d'erreur
            return redirect()->back()->withErrors($validator)->withInput();
            // }
    }
    

    public function show(string $id)
    {
        //
    }

    public function edit(Permission $permission)
    {
        $permissions = Employe::all();
        $events = Calendrier2::all();
        return view('admin.permission.form', compact('permission', 'permissions', 'events'));
    }

    public function update(PermissionFormRequest $request, string $id)
    {
        DB::table('permissions')
            ->where('id', $id)
            ->update($request->validated());

        return to_route('admin.permissions.index');
    }

    public function destroy(string $id)
    {
        $deleted = DB::table('permissions')
                ->where('id', $id)
                ->delete();

        if ($deleted) 
        {
            session(['last_permission_count' => DB::table('permissions')->count()]);
            return redirect()->back()->with('success', 'Employé supprimé avec succès.');
        }
         else 
         {
            return redirect()->back()->with('error', 'Erreur lors de la suppression de l\'employé.');
        }
    }
}
