<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class SocialMediaRequest extends FormRequest
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
     * @return array<string, ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|max:60',
            'icon' => 'required|max:60',
            'url' => 'required|max:999',
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
            'title.required' => 'O campo Título é obrigatório.',
            'title.max' => 'O campo Título não pode ser superior a 60 caracteres.',
            'icon.required' => 'O campo Ícone é obrigatório.',
            'icon.max' => 'O campo Ícone não pode ser superior a 60 caracteres.',
            'url.required' => 'O campo URL é obrigatório.',
            'url.max' => 'O campo URl não pode ser superior a 999 caracteres.',
        ];
    }
}
