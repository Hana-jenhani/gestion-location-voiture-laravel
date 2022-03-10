<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class voitures extends Model
{
    protected $fillable = [
        'matricule',
        'type',
        'modele',
        'couleur',
        'photo',
    ];

}
