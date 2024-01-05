<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\SelectRule;
use Illuminate\Validation\Rule;

class PostRequest extends FormRequest
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
            'title' => 'required|max:180',
            'slug' => [
                'required',
                Rule::unique('posts')->ignore($this->post),
            ],
            'author' => 'required|max:80',
            'category_posts_id' => new SelectRule,
            'publication_date' => 'required|date_format:d/m/Y',
            'text' => 'required'
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
            'title.max' => 'O campo Título não pode ser superior a 180 caracteres.',
            'publication_date.required' => 'O campo Data de publicação é obrigatório.',
            'publication_date.date_format' => 'O campo Data de publicação não corresponde ao formato d/m/Y.',
            'author.required' => 'O campo Autor é obrigatório.',
            'author.max' => 'O campo Autor não pode ser superior a 80 caracteres.',
            'text.required' => 'O campo Texto é obrigatório.',
            'text.max' => 'O campo Texto não pode ser superior a 999 caracteres.',
            'slug.required' => 'O campo URL Amigável é obrigatório.',
            'slug.unique' => 'O campo URL Amigável já está sendo utilizado.',
        ];
    }
}
