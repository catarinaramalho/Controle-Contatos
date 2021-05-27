@extends('layout')

@section('titulo')
Endereços de {{ $contato->name }}
@endsection
@section('cabecalho')
Endereços de {{ $contato->name }}
@endsection

@section('conteudo')
<a href="/contato/{{$contato->id}}/adicionarEndereco" class="btn btn-dark mb-2"> Adicionar </a>
<ul class="list-group">
    <?php
    $i = 0;
    ?>
    @foreach($enderecos as $endereco)
    <?php
    $i++;
    ?>
    <li class="list-group-item d-flex justify-content-between align-items-center">
        <span id="numero-endereco-{{ $endereco->id }}">Endereço {{$i}}</span>

        <span class="d-flex">
            <a href="/enderecos/{{ $endereco->id }}" class="btn btn-warning btn-sm mr-2">
                <i class="fas fa-home"></i>
            </a>
            <form method="post" action="/enderecos/remover/{{ $endereco->id }}">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger btn-sm">
                    <i class="far fa-trash-alt"></i>
                </button>
            </form>
        </span>
    </li>
    @endforeach
</ul>

@endsection