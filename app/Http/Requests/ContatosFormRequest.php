<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContatosFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nome' => sprintf('required|min:3|max:8', $this->post->nome)
        ];
        return [
            'nr_telefone' => sprintf('required|min:15|max:15', $this->post->telefone)
        ];
        return [
            'cpf' => sprintf('required|min:14|max:14', $this->post->cpf)
        ];
        return [
            'rg' => sprintf('required|min:9|max:9', $this->post->rg)
        ];
        return [
            'rua' => sprintf('required|min:3|max:200', $this->post->rua)
        ];
        return [
            'nr' => sprintf('required|min:1|max:5', $this->post->nr)
        ];
        return [
            'complemento' => sprintf('required|min:0|max:200', $this->post->complemento)
        ];
        return [
            'bairro' => sprintf('required|min:3|max:200', $this->post->beirro)
        ];
        return [
            'cep' => sprintf('required|min:9|max:9', $this->post->cep)
        ];
        return [
            'cidade' => sprintf('required|min:3|max:200', $this->post->cidade)
        ];
        return [
            'estado' => sprintf('required|min:3|max:200', $this->post->estado)
        ];
    }


    public function messages()
    {
        return [
            'nome.required' => 'O campo nome é obrigatório!',
            'nome.min' => 'O campo nome deve ter pelo menos 3 letras!'
        ];
        return [
            'nome.required' => 'O campo telefone é obrigatório!',
            'nome.min' => 'O campo telefone deve estar no formato (xx) xxxxx-xxxx!'
        ];
        return [
            'nome.required' => 'O campo cpf é obrigatório!',
            'nome.min' => 'O campo cpf deve estar no formato xxx.xxx.xxx-xx!'
        ];
        return [
            'nome.required' => 'O campo rg é obrigatório!',
            'nome.min' => 'O campo rg deve estar no formato x.xxx.xxx!'
        ];
        return [
            'nome.required' => 'O campo rua é obrigatório!',
            'nome.min' => 'O campo rua deve ter pelo menos 3 letras!'
        ];
        return [
            'nome.required' => 'O campo numero é obrigatório!',
            'nome.min' => 'O campo numero deve ter pelo menos 1 número!'
        ];
        return [
            'nome.required' => 'O campo bairro é obrigatório!',
            'nome.min' => 'O campo bairro deve ter pelo menos 3 letras!'
        ];
        return [
            'nome.required' => 'O campo cep é obrigatório!',
            'nome.min' => 'O campo cep deve estar no formato xxxxx-xxx!'
        ];
        return [
            'nome.required' => 'O campo cidade é obrigatório!',
            'nome.min' => 'O campo cidade deve ter pelo menos 3 letras!'
        ];
        return [
            'nome.required' => 'O campo estado é obrigatório!',
            'nome.min' => 'O campo estado deve ter pelo menos 3 letras!'
        ];
    }
}
