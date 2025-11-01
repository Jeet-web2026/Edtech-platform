<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StartenrollmentRequest extends FormRequest
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
            'mob' => 'required|digits:10|numeric',
            'address' => 'required|min:3',
            'last_qualification' => 'required|min:3|string',
            'last_qualification_organisation' => 'required|min:3|string',
            'class_tenth_percentage' => 'required',
            'class_tenth_organisation_name' => 'required|min:3|string',
            'class_twelveth_percentage' => 'required',
            'class_twelveth_organisation_name' => 'required|string|min:3',
            'parent_id' => 'required'
        ];
    }

    public function messages(): array
    {
        return [
            'first_name.required' => 'First name is required!',
            'first_name.string' => 'First name must be an alphabet or letter.',
            'first_name.min' => 'First name must be three characters long!',
            'last_name.required' => 'Last name is required!',
            'last_name.string' => 'Last name must be an alphabet or letter.',
            'last_name.min' => 'Last name must be three characters long!',
            'email.required' => 'Email is required!',
            'email.email' => 'Email will be a valid email.',
            'mob.required' => 'Mobile number is required!',
            'mob.digits' => 'Mobile number must be ten digits long!',
            'mob.numeric' => 'Mobile number is a valid number.',
            'address.required' => 'Address is required!',
            'address.min' => 'Address must be three characters long!',
            'last_qualification.required' => 'Last qualification is required!',
            'last_qualification.min' => 'Last qualification is must be three characters long!',
            'last_qualification.string' => 'Last qualification is must be an alphabet or letter.',
            'last_qualification_organisation.required' => 'Last qualification organisation is required!',
            'last_qualification_organisation.min' => 'Last qualification organisation is must be three characters long!',
            'last_qualification_organisation.string' => 'Last qualification organisation must be a valid alphabet or letter.',
            'class_tenth_percentage.required' => 'Clas Xth percentage is required!',
            'class_tenth_organisation_name.required' => 'Class Xth organisation name is required!',
            'class_tenth_organisation_name.min' => 'Class Xth organisation name is must be three characters long!',
            'class_tenth_organisation_name.string' => 'Class Xth organisation name must be a valid alphabet or letter.',
            'class_twelveth_percentage.required' => 'Clas Xth percentage is required!',
            'class_twelveth_organisation_name.required' => 'Class XIIth organisation name is required!',
            'class_twelveth_organisation_name.min' => 'Class XIIth organisation name is must be three characters long!',
            'class_twelveth_organisation_name.string' => 'Class XIIth organisation name must be a valid alphabet or letter.',
            'parent_id.required' => 'Parent id is required!'
        ];
    }
}
