<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

//por estudar

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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {

        return [
            "nome_completo" => "required",
            "email" => "required|unique:users,email|email",
            "password" => "required|min:6",
        ];
    }

    public function messages() : array {
       
        return [
            "nome_completo.required" => "informe o seu nome",
            "email.email" => "o email deve ser o tipo email",            
            "email.unique" => "este email já está cadastrado no sistema",            
            "password.required" => "informe a password" ,           
            "password.min" => "a password deve ter no mínimo :min caracteres"           
        ];
    }
}
