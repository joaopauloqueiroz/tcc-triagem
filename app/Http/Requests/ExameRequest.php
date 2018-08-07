<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ExameRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true; //qualquer um pode usar esse tipo de request
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        //regras de entrada de dados doprocesso de triagem
        return [
            'queixa'      => ['required','min:10'],
            'pa'          => ['required'],
            'fc'          => ['required'],
            'temperatura' => ['required'],
            'sat'         => ['required'],
            'fr'          => ['required']
        ];
    }
}
