<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Ancien extends Authenticatable
{
    use HasFactory;

    protected $fillable = [
    'nom',
        'datenaissance',
        'lieunaissance',
        'email',
        'telephone',
        'annee_entree',
        'photo', // ok
    ];

     
}
