<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentadditionaldetailsRequest extends FormRequest
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
            'student_id' => 'required|exists:students,id',
            'date_of_birth' => 'required|date',
            'bld_group' => 'required',
            'course_name' => 'required|string|max:255',
            'emergency_contact_person' => 'required|string|max:255',
            'emergency_contact' => 'required|digits:10|max:15',
            'admission_fees' => 'required|numeric|min:0',
            'semester_fees' => 'required|numeric|min:0',
            'total_semester' => 'required|integer|min:1',
            'examination_fees' => 'required|numeric|min:0',
            'total_fee' => 'required|numeric|min:0',
        ];
    }
}
