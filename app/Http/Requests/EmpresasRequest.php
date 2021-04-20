<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmpresasRequest extends FormRequest
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

    public function rules()
    {
        return [
            'razao' => 'required|min:4',
            'telefone' => 'required|min:8',
            'endereco' => 'required|min:8',
            'cep' => 'required|min:8',
            'estado' => 'required|min:4',
            'cidade' => 'required|min:4',
        ];
    }

    public function messages() {
        return [
            'razao.required' => 'A razao social é obrigatório',
            'telefone.required' => 'O Telefone é obrigatório',
            'endereco.required' => 'O Endereço é obrigatório',
            'cep.required' => 'O CEP é obrigatório',
            'cidade.required' => 'A Cidade é obrigatório',
            'estado.required' => 'O Estado é obrigatório',
        ];
    }
}
