<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Equipement extends Model
{
    protected $fillable = [
        'id',
        'appareil',
        'code',
        'fabricant',
        'type',
        'serie',
        'societeContacter',
        'dateInstallation',
        'documentTechDispo',
        'salle',
        'commentaires',
        'dateQualification',
        'etat'

    ];
}
