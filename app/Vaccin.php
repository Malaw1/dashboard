<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vaccin extends Model
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
