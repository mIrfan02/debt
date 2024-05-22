<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LegalRequest extends FormRequest
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
            'plaintiff.*.*' => 'required|string|max:255',
            'defendant.*.*' => 'required|string|max:255',
            'chapter' => 'required|string|max:255',
            'case_number' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'closed_date' => 'nullable|date',
            'converted_date' => 'nullable|date',
            'date_341' => 'nullable|date',
            're_affirmation_amount' => 'nullable|numeric',
            're_affirmation_date' => 'nullable|date',
            'arrangement_amount' => 'nullable|numeric',
            'probate_case_number' => 'nullable|string|max:255',
            'date_of_death' => 'nullable|date',
            'court_name' => 'required|string|max:255',
            'county' => 'required|string|max:255',
            'state' => 'required|string|max:255',
            'date_filed' => 'required|date',
            'date_expires' => 'nullable|date',
            'remarks' => 'nullable|string',
            'claim_id'=>'nullable',
        ];
    }
}
