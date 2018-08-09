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
    /**
     * decidir a cor da Barra lateral
     *
     * @param [type] $color
     * @return void
     */
    public static function setColor($color)
    {
        if (strtoupper($color) == 'NãO URGENTE') {
            $color = '#2f80ed';
        } elseif (strtoupper($color) == 'POUCO URGENTE') {
            $color = '#219653';
        } elseif (strtoupper($color) == 'EMERGÊNCIA') {
            $color = '#F70000';
        }
        return $color;
    }
}
