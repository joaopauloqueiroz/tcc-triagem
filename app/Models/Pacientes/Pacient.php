<?php

namespace App\Models\Pacientes;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Pacient extends Model
{
    protected $fillable = [
        'name',
        'rg',
        'emissor',
        'cpf',
        'cns',
        'pis',
        'sexo',
        'estado_civil',
        'profissao',
        'data_nacimento',
        'name_mae',
        'name_pai',
        'cep',
        'rua',
        'bairro',
        'tp_logradouro',
        'logradouro',
        'cidade',
        'numero',
        'complemento',
        'estado',
        'celuar',
        'telefone',
        'email',
        'user_id'
    ];

    /**
     * metodo de relacionamento de 1 para muitos, ou seja de um pacient
     * para varios exames
     * @return void
     */

    public function exames()
    {
        return $this->hasMany('App\Models\Exames\Exame')->orderBy('created_at');
    }
}
