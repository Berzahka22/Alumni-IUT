<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

     protected $fillable = [
        'id_ancien',
        'couleur_logo',
        'nom_directeur',
        'nbr_departement',
        'ville_iut',
        'platforme_iut',
    ];
}
