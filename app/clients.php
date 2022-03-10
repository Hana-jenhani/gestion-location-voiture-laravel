<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class clients extends Model
{
    protected $fillable = [
        'cin',
        'nom',
        'prenom',
        'datenaissance',
        'adresse',
        'ville',
        'codepostale',
        'tel',
    ];

}  
