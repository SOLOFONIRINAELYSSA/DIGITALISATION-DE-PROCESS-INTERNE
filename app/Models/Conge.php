<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Conge extends Model
{
    // ================= Primary Key =====================
    protected $primaryKey = 'numConge';

    // ================= Type Primary Key ================
    protected $keyType = 'string';

    // ===== One to Many Inverse : (0,1) ou (1,1) ========
    public function employes(): BelongsTo
    {
        return $this->belongsTo(Employe::class, 'numEmp', 'numEmp');
    }

    protected $fillable = [
        'numEmp',
        'nomApprobateur',
        'nbrjr',
        'typeConge',
        'solde',
        'jours_reportes',
        'motif',
        'dateDebut',
        'dateFin'
    ];


           // Fonction pour calculer le solde pour la nouvelle année
        //    public function calculerSoldeAnnuel($numEmp)
        //    {
        //        // Récupérer le solde actuel et les jours reportés de l'employé
        //        $employe = Employe::where('numEmp', $numEmp)->first();
           
        //        // Calculer les jours pris l'année précédente
        //        $congesAnneePrecedente = $this->where('numEmp', $numEmp)
        //                                      ->whereYear('dateDebut', now()->year - 1)
        //                                      ->sum('nbrjr');
           
        //        // Calculer les jours reportés (15 jours facultatifs max peuvent être reportés)
        //        $joursReportes = max(0, 15 - $congesAnneePrecedente); 
           
        //        // Si l'employé n'a pas pris de congé (nbrjr = 0), il reporte les 15 jours facultatifs
        //        if ($congesAnneePrecedente == 0) {
        //            $joursReportes = 15;
        //        }
           
        //        // Nouveau solde = 30 jours de congé de l'année en cours
        //        $nouveauSolde = 30;
           
        //        // Ajouter les jours reportés au solde de la nouvelle année
        //        $nouveauSolde += $employe->jours_reportes;
           
        //        // Retourner le solde et les jours reportés pour mise à jour
        //        return [
        //            'solde' => $nouveauSolde,
        //            'jours_reportes' => $joursReportes
        //        ];
        //    }           

    use HasFactory;
}
