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
}
