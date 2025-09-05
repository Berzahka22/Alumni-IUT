<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AncienEtudiant extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'date_naissance',
        'lieu_naissance',
        'email',
        'telephone', 
        'annee_entree',
       
    ];
}