<?php

namespace App\Services;

use App\Contato;
use Illuminate\Support\Facades\DB;

class CriadorDeContato
{
    public function criarContato(
        string $nomeContato,
        string $nr_telefone,
        string $cpf,
        string $rg,
        string $rua,
        string $nr,
        string $complemento,
        string $bairro,
        string $cep,
        string $cidade,
        string $estado

    ): Contato {
        DB::beginTransaction();
        $contato = Contato::create(['name' => $nomeContato, 'nr_telefone' => $nr_telefone, 'cpf'=>$cpf, 'rg'=>$rg]);
        $this->criaEndereco($rua, $nr, $complemento, $bairro, $cep, $cidade, $estado, $contato);
        DB::commit();

        return $contato;
    }

    
    public function criaEndereco(string $rua, string $nr, string $complemento, string $bairro, string $cep, string $cidade, string $estado, Contato $contato): void
    {
        $endereco = $contato->enderecos()->create(['rua' => $rua, 'nr' => $nr, 'complemento'=>$complemento, 'bairro'=> $bairro, 'cep'=>$cep, 'cidade'=> $cidade, 'estado'=>$estado]);
    }
}