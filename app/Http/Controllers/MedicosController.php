<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\MedicosRequest;
use App\Models\Medicos;

class MedicosController extends Controller
{
    function cadastrar () {
        return view('medicos.cadastrar');
    }

    function store (MedicosRequest $request) {
        $medico = new Medicos;
        $medico->nome = $request->nome;
        $medico->crm = $request->crm;
        $medico->endereco = $request->endereco;
        $medico->telefone = $request->telefone;
        $medico->estado = $request->estado;
        $medico->cep = $request->cep;
        $medico->cidade = $request->cidade;
        $medico->email = $request->email;
        $medico->save();

        dd('cadastrado');
    }
}
