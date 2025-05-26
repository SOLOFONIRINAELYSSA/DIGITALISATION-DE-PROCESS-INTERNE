<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Calendrier extends Model
{
    protected $fillable = [
        'dateDebu',
        'dateFin',
        'timeDebu',
        'timeFin',
        'titre',
        'description'
    ];

    use HasFactory;
}

