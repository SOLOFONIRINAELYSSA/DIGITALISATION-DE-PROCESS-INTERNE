<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Entreprise extends Model
{
    // ================= Primary Key =====================
    protected $primaryKey = 'CodeEntreprise';

    // ================= Type Primary Key ================
    protected $keyType = 'string';

    // =========== One to Many : (0,n) ou (1,n) ==========
    public function employes(): HasMany
    {
        return $this->hasMany(Employe::class, 'CodeEntreprise', 'CodeEntreprise');
    }

    protected $fillable = [
        'CodeEntreprise',
        'NomEntreprise',
        'PosatalEntreprise',
        'VillEntreprise',
        'EmailEntreprise',
        'logoEntreprise'
    ];

    use HasFactory;
}
