<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PacientRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        //regras para validar a entrada de dados do paciente
        return [
            'name'          => ['required', 'min:3'],
            'rg'            => ['required', 'max:9'],
            'emissor'       => ['required', 'min:3'],
            'cpf'           => ['required','max:11'],
            'name_mae'      => ['required'],
            'cep'           => ['required'],
            'logradouro'    => ['required'],
            'bairro'        => ['required'],
            'tp_logradouro' => ['required'],
            'cidade'        => ['required'],
            'numero'        => ['required'],
            'estado'        => ['required'],
            'celular'       => ['required']
        ];
    }
}
