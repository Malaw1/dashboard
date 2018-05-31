<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reactif extends Model
{
    protected $fillable = [
        'id',
        'designation',
        'conditionnement',
        'lot',
        'fabriquant',
        'quantite',
        'quantiteUtilise',
        'dateFab',
        'dateExp',
    ];

    
}
