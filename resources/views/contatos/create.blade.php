@extends('layout')

@section('titulo')
Cadastro de Contato
@endsection

@section('cabecalho')
Cadastro de Contato
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
        <h3>Dados de Contato</h3>
            <label for="nome" class="">Nome: </label>
            <input type="text" class="form-control" name="nome" id="nome" placeholder="Ex.: Lucas Guimarães da Costa" required>
            <label for="cpf" class="">CPF: </label>
            <input type="text" name="cpf" id="cpf" class="form-control cpf-mask" placeholder="Ex.: 000.000.000-00" required>
            <label for="rg" class="">RG: </label>
            <input type="text" class="form-control" name="rg" id="rg" required placeholder="Ex.: 7785785">
            <label for="nr_telefone" class="">Nr Telefone: </label>
            <input type="text" class="form-control cel-sp-mask" placeholder="Ex.: (00) 00000-0000" name="nr_telefone" id="nr_telefone" required>
        <hr />
            <h3>Dados de Endereço</h3>

            <label for="rua" class="">Rua: </label>
            <input type="text" class="form-control" name="rua" id="rua" placeholder="Ex.: Rua Onde a Felicidade Mora" required>
            <label for="nr" class="">NR: </label>
            <input type="text" class="form-control" name="nr" id="nr" placeholder="Ex.: 785" required>
            <label for="complemento" class="">Complemento: </label>
            <input type="text" class="form-control" name="complemento" id="complemento" placeholder="Ex.: Casa A" required>
            <label for="bairro" class="">Bairro: </label>
            <input type="text" class="form-control" name="bairro" id="bairro" placeholder="Ex.: Bairro do Limoeiro" required>
            <label for="cep" class="">CEP: </label>
            <input type="text" class="form-control cep-mask" placeholder="Ex.: 00000-000" name="cep" id="cep" required>
            <label for="cidade" class="">Cidade: </label>
            <input type="text" class="form-control" name="cidade" id="cidade" placeholder="Ex.: Cidade da Arte" required>
            <label for="estado" class="form-label">Estado: </label>
            <select type = "text"  name="estado" id="estado" class="form-select" required>
                <option selected>Escolha...</option>
                <option value="AC">AC</option>
                <option value="AL">AL</option>
                <option value="AP">AP</option>
                <option value="AM">AM</option>
                <option value="BA">BA</option>
                <option value="CE">CE</option>
                <option value="DF">DF</option>
                <option value="ES">ES</option>
                <option value="GO">GO</option>
                <option value="MA">MA</option>
                <option value="MT">MT</option>
                <option value="MS">MS</option>
                <option value="MG">MG</option>
                <option value="PA">PA</option>
                <option value="PB">PB</option>
                <option value="PR">PR</option>
                <option value="PE">PE</option>
                <option value="PI">PI</option>
                <option value="RJ">RJ</option>
                <option value="RN">RN</option>
                <option value="RS">RS</option>
                <option value="RO">RO</option>
                <option value="RR">RR</option>
                <option value="SC">SC</option>
                <option value="SP">SP</option>
                <option value="SE">SE</option>
                <option value="TO">TO</option>

            </select>
            <hr />

    </div>
    <button class="btn btn-primary mt-3">Cadastro</button>
    <hr />
</form>
@endsection