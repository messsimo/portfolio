<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class contactRequest extends FormRequest
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
            "name" => "required|max:24|min:2",
            "email" => "email|required",
            "message" => "min:10"
        ];
    }

    public function messages() {
        return [
            "name.required" => "Enter your name",
            "email.required" => "Enter your email",
            "name.min" => "Your name must be more then 2 chars",
            "message.min" => "Your message must be more then 10 chars",
            "name.max" => "Your name must be under then 24 chars",
            "email.email" => "Enter a vailid Email. Example: danielmihai.it@mail.ru"
         ];
    }
}
