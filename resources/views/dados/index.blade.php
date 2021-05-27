@extends('layout')

@section('titulo')
Dados de {{ $contato->name }}
@endsection
@section('cabecalho')
Dados de {{ $contato->name }}
@endsection

@section('conteudo')
<form method="post">
    @csrf
    <div class="row">

        <label for="name" class="">Nome: </label>
        <input type="text" class="form-control" name="name" id="name" value="{{ $contato->name }}">
        <label for="cpf" class="">CPF: </label>
        <input type="text" class="form-control cpf-mask" placeholder="Ex.: 000.000.000-00" name="cpf" id="cpf" value="{{ $contato->cpf }}">
        <label for="rg" class="">RG: </label>
        <input type="text" class="form-control" name="rg" id="rg" value="{{ $contato->rg }}">
        <label for="nr_telefone" class="">Nr Telefone: </label>
        <input type="text" class="form-control cel-sp-mask" placeholder="Ex.: (00) 00000-0000" name="nr_telefone" id="nr_telefone" value="{{ $contato->nr_telefone }}">


    </div>
    <button class="btn btn-primary mt-3" action="/contatos/{{$contato->id}}/dados">Atualizar</button>
</form>


@endsection