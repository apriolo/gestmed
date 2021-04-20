<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\EmpresasRequest;
use App\Models\Empresas;

class EmpresasController extends Controller
{
    function cadastrar () {
        return view('empresas.cadastrar');
    }

    function store (EmpresasRequest $request) {
        $empresa = new Empresas;
        $empresa->razao = $request->razao;
        $empresa->cnpj = $request->cnpj;
        $empresa->endereco = $request->endereco;
        $empresa->telefone = $request->telefone;
        $empresa->estado = $request->estado;
        $empresa->cep = $request->cep;
        $empresa->cidade = $request->cidade;
        $empresa->save();

        dd('cadastrado');
    }
}
