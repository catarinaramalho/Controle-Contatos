@extends('layout')

@section('titulo')
Ver Endereço
@endsection

@section('cabecalho')
Dados do Endereço
@endsection

@section('conteudo')

@if ($errors->any())
<div class="alert alert-danger">
    <ul> @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<form method="post">
    @csrf
    <div class="row">

        <label for="rua" class="">Rua: </label>
        <input type="text" class="form-control" name="rua" id="rua" value="{{ $endereco->rua }}" disabled>
        <label for="nr" class="">NR: </label>
        <input type="text" class="form-control" name="nr" id="nr" value="{{ $endereco->nr }}" disabled>
        <label for="complemento" class="">Complemento: </label>
        <input type="text" class="form-control" name="complemento" id="complemento" value="{{ $endereco->complemento }}" disabled>
        <label for="bairro" class="">Bairro: </label>
        <input type="text" class="form-control" name="bairro" id="bairro" value="{{ $endereco->bairro }}" disabled>
        <label for="cep" class="">CEP: </label>
        <input type="text" class="form-control" name="cep" id="cep" value="{{ $endereco->cep }}" disabled>
        <label for="cidade" class="">Cidade: </label>
        <input type="text" class="form-control" name="cidade" id="cidade" value="{{ $endereco->cidade }}" disabled>
        <label for="estado" class="">Estado: </label>
        <input type="text" class="form-control" name="estado" id="estado" value="{{ $endereco->estado }}" disabled>


    </div>
    <!--<button class="btn btn-primary mt-3">Atualizar</button>-->
</form>


@endsection