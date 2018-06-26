<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reception extends Model
{
    protected $fillable = [
        'client_id', 'dateRecep', 'type', 'observation'
    ];

}
