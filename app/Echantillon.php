<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Echantillon extends Model
{
    protected $fillable = [
        'dateRecu', 'nomProduit', 'type', 'code', 'formeGalenique', 'quantiteRecu',
        'Fournisseur', 'dateFab', 'dateExp', 'lieuPrelevement'
    ];
}
