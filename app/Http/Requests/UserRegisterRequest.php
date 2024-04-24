<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class UserRegisterRequest extends FormRequest {
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array {
        return [
            "email" => ['required', 'email', 'max:100', 'unique:users,email'],
            "password" => ['required', 'max:100'],
            "no_ktp" => ['required', 'max:16'],
            "name" => ['required', 'max:100'],
            "birth_date" => ['nullable', 'date'],
            "gender" => ['nullable'],
            "address" => ['nullable', 'max:100'],
            "phone_number" => ['nullable', 'max:20'],
        ];
    }

    protected function failedValidation(Validator $validator) {
        throw new HttpResponseException(response([
            "errors" => $validator->getMessageBag() 
        ], 400));
    }
}
