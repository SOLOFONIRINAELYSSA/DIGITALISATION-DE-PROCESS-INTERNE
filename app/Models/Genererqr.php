<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Genererqr extends Model
{
    // ===== One to Many Inverse : (0,1) ou (1,1) ========
    public function employes(): BelongsTo
    {
        return $this->belongsTo(Employe::class, 'numEmp', 'numEmp');
    }

    protected $fillable = [
        'numEmp',
        'imageqr'
    ];

    use HasFactory;
}
