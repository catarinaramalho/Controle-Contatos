<?php

namespace App\Http\Controllers;

use App\Contato;
use Illuminate\Http\Request;
use App\Models\Telefone;

class DadosController extends Controller
{
    public function index(int $contatoId){
        $contato = Contato::find($contatoId);
        $telefones = $contato->telefones;

        return view('dados.index', 
            ['contato' => $contato],
        ['telefones' => $telefones]);
           
    }

}
