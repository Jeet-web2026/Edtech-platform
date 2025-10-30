<?php

namespace App\Http\Requests;

use App\Rules\PasswordRule;
use Illuminate\Foundation\Http\FormRequest;

class SaveadminRequest extends FormRequest
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
            'name' => 'required|string|min:3',
            'email' => 'required|email',
            'mob' => 'required|numeric|digits:10',
            'aadhaar' => 'required|digits:12',
            'profile' => 'required|mimes:jpg,jpeg,png|image',
            'password' => ['required', new PasswordRule()],
            'valid_from' => 'required|date',
            'valid_to' => 'required|date|after:valid_from',
            'parent_id' => 'required|numeric',
            'address' => 'required'
        ];
    }
}
