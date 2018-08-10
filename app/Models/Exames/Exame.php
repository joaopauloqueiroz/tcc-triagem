<?php

namespace App\Models\Exames;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Exame extends Model
{
    /**
     * Relacionamento de exame com protocolo
     *
     * @return void
     */
    public function protocolos()
    {
        return hasOne('App\Models\Protocolos\Protocolo', 'id', 'prot_id');
    }

    /**
     * Relacionamento exame para paciente
     *
     * @return void
     */
    public function pacientes()
    {
        return HasOne('App\Models\Pacientes\Pacient', 'id', 'pacient_id');
    }
}
