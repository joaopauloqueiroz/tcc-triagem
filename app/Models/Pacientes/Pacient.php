<?php

namespace App\Models\Pacientes;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Pacient extends Model
{
    /**
     * relacionamentopaciente com exames
     *
     * @return void
     */
    public function exames()
    {
        return hasMany('App\Models\Exames\Exame', 'id')->orderBy('created_at');
    }
}
