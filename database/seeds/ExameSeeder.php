<?php

use Illuminate\Database\Seeder;
use App\Models\Exames\Exame;

class ExameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Exame::insert([
        'queixa' => 'Dores no corpo, febre alta',
        'alergias' => 'Nenhuma alergia',
        'urgencia' => 'Não Urgente',
        'cardiopatia' => '0',
        'has' => '0',
        'pneupatia' => '0',
        'tireoide' => '0',
        'contagious_infectous' => '0',
        'dm' => '0',
        'nefropatia' => '0',
        'gestante' => '0',
        'gastrite' => '0',
        'neuropatia' => '0',
        'tabagismo' => '0',
        'consciente' => '0',
        'atitude_antalgica' => '0',
        'desmaio_convulsoes' => '0',
        'ferida' => '0',
        'processo_alergico' => '0',
        'pa1' => 12,
        'pa2' => 15,
        'fc' => 12.50,
        'temperatura' => 12.51,
        'sat' => 3.25,
        'fr' => 150,
        'pacient_id' => 1,
        'user_id' => 2,
        'prot_id' => 2
        ]);
    }
}
