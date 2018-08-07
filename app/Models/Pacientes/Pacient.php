<?php

namespace App\Models\Pacientes;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Pacient extends Model
{
    //fillable

    /**
     * metodo de relacionamento de 1 para muitos, ou seja de um pacient
     * para varios exames
     * @return void
     */

    public function exames()
    {
        return HasMany('App\Models\Exames\Exame');
    }
}
