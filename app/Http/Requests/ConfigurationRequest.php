<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ConfigurationRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'titulo' => 'required|max:80|min:3',
            'descricao' => 'required|max:180|min:3',
            'copyright' => 'required|max:180|min:3',
            'email' => 'required|email',
            'cor_principal' => 'required',
            'cor_titulos' => 'required',
            'cor_botoes' => 'required',
            'cor_fundo' => 'required',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'titulo.required' => 'O campo Título do site é obrigatório.',
            'titulo.max' => 'O campo Título do site não pode ser superior a 80 caracteres.',
            'titulo.min' => 'O campo Título do site deve ter pelo menos 3 caracteres.',
            'descricao.required' => 'O campo Descrição do site é obrigatório.',
            'descricao.max' => 'O campo Descrição do site não pode ser superior a 180 caracteres.',
            'descricao.min' => 'O campo Descrição do site deve ter pelo menos 3 caracteres.',
            'copyright.required' => 'O campo Copyright é obrigatório.',
            'copyright.max' => 'O campo Copyright não pode ser superior a 80 caracteres.',
            'copyright.min' => 'O campo Copyright deve ter pelo menos 3 caracteres.',
            'email.required' => 'O campo E-mail do site é obrigatório.',
            'email.email' => 'O campo E-mail deve ser um endereço de e-mail válido.',
            'cor_principal.required' => 'O campo Cor principal é obrigatório.',
            'cor_titulos.required' => 'O campo Cor dos títulos é obrigatório.',
            'cor_botoes.required' => 'O campo Cor dos botões é obrigatório.',
            'cor_fundo.required' => 'O campo Cor de fundos de títulos é obrigatório.',
        ];
    }
}
