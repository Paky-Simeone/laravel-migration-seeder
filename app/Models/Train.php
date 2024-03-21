<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Train extends Model
{
    use HasFactory;

    protected $fillable = [
    'Azienda',
    'Stazione_di_partenza',
    'Stazione_di_scalo',
    'Stazione_di_arrivo',
    'Orario_di_partenza',
    'Orario_di_arrivo',
    'Codice_Treno',
    'Numero_Carrozze'
];
}
