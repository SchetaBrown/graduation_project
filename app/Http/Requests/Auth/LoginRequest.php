<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Validation\ValidationException;

class LoginRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'email' => ['required', 'string', 'email:rfc,dns', 'exists:users,email'],
            'password' => ['required', 'string', 'min:8'],
        ];
    }

    public function messages()
    {
        return [
            // Email
            'email.required' => 'Поле email обязательно к заполнению',
            'email.string' => 'Поле email должно быть строкового типа',
            'email.email' => 'Поле email имеет недействительный формат',
            'email.exists' => 'Данный email уже занят',

            // Пароль
            'password.required' => 'Поле пароль обязательно к заполнению',
            'password.string' => 'Поле пароль должно быть строкового типа',
            'password.min' => 'Минимальная длина: 8 символов',
        ];
    }
}
