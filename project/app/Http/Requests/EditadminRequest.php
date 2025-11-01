<?php

namespace App\Http\Requests;

use App\Rules\PasswordRule;
use Illuminate\Foundation\Http\FormRequest;

class EditadminRequest extends FormRequest
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
            'first_name' => 'required|string|min:3',
            'last_name' => 'required|string|min:3',
            'email' => 'required|email',
            'mob' => 'required|numeric|digits:10',
            'aadhaar' => 'required|digits:12',
            'valid_from' => 'required|date',
            'valid_to' => 'required|date|after:valid_from',
            'address' => 'required'
        ];
    }

    public function messages(): array
    {
        return [
            'first_name.required' => 'First Name is required!',
            'first_name.min' => 'First Name should be three characters long!',
            'last_name.required' => 'Last Name is required!',
            'last_name.min' => 'Last Name should be three characters long!',
            'email' => 'Email is required!',
            'email.email' => 'Please provide a valid email address.',
            'mob.required' => 'Mobile number is required!',
            'mob.numeric' => 'Mobile number should be in numeric format',
            'mob.digits' => 'Mobile number should be 10 digits long!',
            'aadhaar.required' => 'Aadhaar number is required!',
            'aadhaar.digits' => 'Aadhaar number should be 12 characters long!',
            'valid_from.required' => 'Validity start date is required!',
            'valid_from.date' => 'Validity start date is not a valid date format.',
            'valid_to.required' => 'Validity end date is required!',
            'valid_to.date' =>  'Validity end date is not a valid date format.',
            'valid_to.after' => 'Validity end date should be after of start date.',
            'address.required' => 'Address is required.'
        ];
    }
}
