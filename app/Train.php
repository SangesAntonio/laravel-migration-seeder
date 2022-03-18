<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Train extends Model
{
    protected $fillable = [
        'id',
        'azienda',
        'stazione_di_partenza',
        'stazione_di_arrivo',
        'orario_di_partenza',
        'orario_di_arrivo',
        'codice_treno',
        'carrozza_in_orario',
        'cancellato',


    ];
}
