<?php

use Illuminate\Database\Seeder;
use App\Models\Pacientes\Pacient;

class PacientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pacient::insert([
        'name' => 'Roberto Carlos',
        'rg' => '585792690',
        'emissor' => 'SSP',
        'cpf' => '13478924600',
        'sexo' => 'M',
        'estado_civil' => 'Solteiro',
        'profissao' => 'Desenvolvedor Web',
        'data_nacimento' => '1990-05-19',
        'name_mae' => 'Elizabeth Goçalves Queiroz',
        'name_pai' => 'Milton Freire de Queiroz',
        'cep' => '06786320',
        'rua' => 'Rua',
        'bairro' => 'Jd. Elizabete',
        'tp_logradouro' => 'RUA',
        'logradouro' => 'Rua da Paz',
        'cidade' => 'Taboão da Serra',
        'numero' => '18',
        'complemento' => 'apto 23 bloco 06',
        'estado' => 'SP',
        'celuar' => '11995096974',
        'telefone' => '1129376604',
        'email' => 'teste@teste.com',
        'user_id' => '1',
        'exame_id' => '1'
        ]);
    }
}
