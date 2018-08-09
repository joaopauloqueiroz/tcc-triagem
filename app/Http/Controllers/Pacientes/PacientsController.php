<?php

namespace App\Http\Controllers\Pacientes;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Pacientes\Pacient;
use App\Models\Exames\Exame;
use App\Classes\Validations;

//
class PacientsController extends Controller
{
    protected $pacient;
    public function __construct(Pacient $pacients)
    {
        $this->pacient = $pacients;
    }

    public function index()
    {
        $paciente = $this->pacient->find(1);
        $idade = Validations::getIdade($paciente->data_nacimento);
        return view('home.index', compact('paciente', 'idade'));
    }

    public function show($id)
    {
        $exame = Exame::find($id);
        
        if ($exame) {
            $paciente = $exame->pacients;
            $idade = Validations::getIdade($paciente->data_nacimento);
            $color = Validations::setColor($exame->urgencia);
            return view('exame.index', compact('paciente', 'exame', 'idade', 'color'));
        } else {
            return "Exame não encontrado";
        }
    }
}
