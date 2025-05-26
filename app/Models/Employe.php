<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Employe extends Model
{
    // ================= Primary Key =====================
    protected $primaryKey = 'numEmp';

    // ================= Type Primary Key ================
    protected $keyType = 'string';

    // =========== One to Many : (0,n) ou (1,n) ==========
    public function pointages(): HasMany
    {
        return $this->hasMany(Pointage::class);
    }

    // =========== One to Many : (0,n) ou (1,n) ==========
    public function conges(): HasMany
    {
        return $this->hasMany(Conge::class, 'numEmp', 'numEmp');
    }

    // =========== One to Many : (0,n) ou (1,n) ==========
    public function permissions(): HasMany
    {
        return $this->hasMany(Permission::class, 'numEmp', 'numEmp');
    }

    // ===== One to Many Inverse : (0,1) ou (1,1) ========
    public function genererqrs(): BelongsTo
    {
        return $this->belongsTo(Genererqr::class, 'numEmp', 'numEmp');
    }

    // ===== One to Many Inverse : (0,1) ou (1,1) ========
    // public function entreprise(): BelongsTo
    // {
    //     return $this->belongsTo(Entreprise::class, 'CodeEntreprise', 'CodeEntreprise');
    // }

    protected $fillable = [
        'numEmp',
        'Nom',
        'Prenom',
        'Sexe',
        'Naissance',
        'Adresse',
        'Numero',
        'Email',
        'Poste',
        'DatEntre',
        // 'CodeEntreprise',
        'Postal',
        'Ville',
        'images'
    ];

    use HasFactory;
}
