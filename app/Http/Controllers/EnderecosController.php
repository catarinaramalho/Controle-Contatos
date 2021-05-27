<?php

namespace App\Http\Controllers;

use App\Contato;
use Illuminate\Http\Request;
use App\Models\Endereco;
use App\Services\CriadorDeContato;

class EnderecosController extends Controller
{
    public function index(int $contatoId){
        $contato = Contato::find($contatoId);
        $enderecos = $contato->enderecos;

        return view('enderecos.index', 
            ['contato' => $contato],
        ['enderecos' => $enderecos]);
           
    }
    public function adicionar(int $contatoId){
        $contato = Contato::find($contatoId);
        $enderecos = $contato->enderecos;

        return view('enderecos.create', 
            ['contato' => $contato],
        ['enderecos' => $enderecos]);
           
    }
    public function salvar(int $contatoId, Request $request, CriadorDeContato $criadorDeContato){
        $contato = Contato::find($contatoId);
        $enderecos = $contato->enderecos;
        $criadorDeContato ->criaEndereco($request->rua, $request->nr,  $request->complemento, $request->bairro, $request->cep, $request->cidade, $request->estado, $contato);
        return view('enderecos.index', 
            ['contato' => $contato],
        ['enderecos' => $enderecos]);
           
    }

    public function verEndereco(int $enderecoId){
        $endereco = Endereco::find($enderecoId);

        return view('enderecos.ver',
        ['endereco' => $endereco]);
           
    }

    public function destroy(Request $request)
    {

        $endereco = Endereco::find($request->id);
        $contatoId = $endereco->contato_id;
        $endereco->delete();
    
        Endereco::destroy($request->id);
        $request->session()
            ->flash(
                'mensagem',
                "Endereço removido com sucesso!"
            );
        return redirect()->route('listar_enderecos', ['contatoId'=>$contatoId]);
    }


}
