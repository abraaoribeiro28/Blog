<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules;

class UserRequest extends FormRequest
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
    public function rules(Request $request): array
    {
        $validations = [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
        ];

        if(($request->get('_method') == 'PUT' && $request->get('password')) or !$request->get('_method')){
            $validations['password'] = ['required', 'confirmed', Rules\Password::defaults()];
        }

        return $validations;
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'name.required' => 'O campo Nome do usuário é obrigatório.',
            'name.max' => 'O campo Nome do usuário não pode ser superior a 255 caracteres.',
            'email.required' => 'O campo E-mail do usuário é obrigatório.',
            'password.required' => 'O campo Senha é obrigatório.',
            'password.confirmed' => 'O campo Confirmar senha não confere.',
        ];
    }
}
