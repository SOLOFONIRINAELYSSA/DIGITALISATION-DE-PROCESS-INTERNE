<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Calendrier2 extends Model
{
    protected $fillable = [
        'Titre',
        'Description',
        'DateDebu',
        'DateFin',
        'TimeDebu',
        'TimeFin'
    ];
    
    use HasFactory;
}
