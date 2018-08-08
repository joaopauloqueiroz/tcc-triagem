<?php

namespace App\Models\Exames;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Exame extends Model
{
    protected $fillable = [
        'queixa',
        'alergias',
        'urgencia',
        'cardiopatia',
        'has',
        'pneupatia',
        'tireoide',
        'contagious_infectous',
        'dm',
        'nefropatia',
        'gestante',
        'gastrite',
        'neuropatia',
        'tabagismo',
        'consciente',
        'atitude_antalgica',
        'desmaio_convulsoes',
        'ferida',
        'processo_alergico',
        'pa1',
        'pa2',
        'fc',
        'temperatura',
        'sat',
        'fr',
        'pacient_id',
        'user_id',
        'prot_id'
       
];

    public function protocolos()
    {
        return $this->hasOne('App\Models\Protocolos\Protocol', 'id');
    }

    public function pacients()
    {
        return $this->hasOne('App\Models\Pacientes\Pacient');
    }
}
