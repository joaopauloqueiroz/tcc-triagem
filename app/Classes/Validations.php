<?php
namespace App\Classes;

class Validations
{
    /**
     * Retornar a idade do paciente
     *
     * @param [type] $data
     * @return void
     */
    public static function getIdade($data)
    {
        $data = date('d/m/Y', strtotime($data));
        list($dia, $mes, $ano) = explode('/', $data);
        $hoje = mktime(0, 0, 0, date('m'), date('d'), date('Y'));
        $nascimento = mktime(0, 0, 0, $mes, $dia, $ano);
        $idade = floor((((($hoje - $nascimento) / 60) / 60) / 24) / 365.25);

        return $idade;
    }
}
