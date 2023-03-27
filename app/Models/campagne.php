<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class campagne extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'date_debut',
        'date_fin',
        'resp_comte',
        'saisie_libre',
        'heure_nuit',
        'type_planning',
        'code_analy',
        'date_up',
        'up_user',
        'etat',  
    ];
}
