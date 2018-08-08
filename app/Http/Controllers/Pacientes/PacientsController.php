<?php

namespace App\Http\Controllers\Pacientes;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Pacientes\Pacient;
use App\Models\Exames\Exame;
use App\Classes\Validations;

class PacientsController extends Controller
{
    protected $pacient;
    public function __construct(Pacient $pacients)
    {
        $this->pacient = $pacients;
    }

    public function index()
    {
        $pacientes = $this->pacient->fid(1);
        $idade = Validations::getIdade($pacientes->data_nacimento);
        $titulo = 'Listagem de dados do paciente';
        return view('forms.form_pacient', compact('titulo', 'pacientes', 'idade'));
    }

    public function listar()
    {
        $pac = $this->pacient->find(1);
        return $pac;
    }

    public function exames(Exame $exame)
    {
        $titulo = "Historico";
        $exame = $exame->get();
        return view('forms.exames', compact('exame', 'titulo'));
    }
}
