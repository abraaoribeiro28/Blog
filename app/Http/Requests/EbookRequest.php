<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EbookRequest extends FormRequest
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
            'title' => 'required|max:255',
            'publication_date' => 'required',
            'author' => 'required|max:80',
            'resume' => 'required|max:999',
            'ebook' => 'required'
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
            'title.max' => 'O campo Título não pode ser superior a 255 caracteres.',
            'publication_date.required' => 'O campo Data de publicação é obrigatório.',
            'author.required' => 'O campo Autor é obrigatório.',
            'author.max' => 'O campo Autor não pode ser superior a 80 caracteres.',
            'resume.required' => 'O campo Texto é obrigatório.',
            'resume.max' => 'O campo Texto não pode ser superior a 999 caracteres.',
            'ebook.required' => 'O campo E-book é obrigatório.',
        ];
    }
}
