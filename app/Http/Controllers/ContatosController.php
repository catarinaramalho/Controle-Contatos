<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContatosFormRequest;
use Illuminate\Http\Request;
use App\Contato;
use App\Models\Endereco;
use App\Models\Dados;
use App\Services\CriadorDeContato;


class ContatosController extends Controller
{

   public function index(Request $request){
        $contatos = Contato::query()->orderBy(column: 'name')->get();
        $mensagem = $request->session()->get(key: 'mensagem');
        return view ('contatos.index', ['contatos' => $contatos], 
        ['mensagem' => $mensagem]);

    }

    public function create(){
        return view ('contatos.create');
    }


    public function store(
        Request $request,
        CriadorDeContato $criadorDeContato
    ) {
        $contato = $criadorDeContato->criarContato(
            $request->nome,
            $request->nr_telefone,
            $request->cpf,
            $request->rg,
            $request->rua,
            $request->nr,
            $request->complemento,
            $request->bairro,
            $request->cep,
            $request->cidade,
            $request->estado
        );
    
        $request->session()
            ->flash(
                'mensagem',
                "Contato, {$contato->name}, criado com sucesso!"
            );
    
        return redirect()->route('listar_contatos');
    }

    public function destroy(Request $request)
    {
    
        $contato = Contato::find($request->id);
        $nomeContato = $contato->name;
        $contato->enderecos->each(function (Endereco $endereco) {
            $endereco->delete();
    
        });
        $contato->delete();
    
        Contato::destroy($request->id);
        $request->session()
            ->flash(
                'mensagem',
                "Contato, $nomeContato, removido com sucesso!"
            );
        return redirect()->route('listar_contatos');
    }


    public function editar(int $id, Request $request)
    {
        $novoNome = $request->name;
        $novoNrTelefone = $request->nr_telefone;
        $novoCpf = $request->cpf;
        $novoRg = $request->rg;
        $contato = Contato::find($id);
        $contato->name = $novoNome;
        $contato->nr_telefone = $novoNrTelefone;
        $contato->cpf = $novoCpf;
        $contato->rg = $novoRg;
        $contato->save();
        return redirect()->route('listar_contatos');
    }


}