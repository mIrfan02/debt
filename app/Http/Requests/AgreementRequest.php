<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AgreementRequest extends FormRequest
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
            'debtor_id' => 'required',
            'status' => 'required|string|max:255', // Status must be a required string with a maximum length of 255 characters.
            'type' => 'required|string|max:255', // Type must be a required string with a maximum length of 255 characters.
            'reason' => 'required|string|max:255', // Reason must be a required string with a maximum length of 255 characters.
            'authority' => 'required|string|max:255', // Authority must be a required string with a maximum length of 255 characters.
            'amount' => 'required|numeric', // Amount must be a required numeric field.
            'interest_rate' => 'required|numeric', // Interest Rate must be a required numeric field.
            'interest_amount' => 'required|numeric', // Interest Amount must be a required numeric field.
            'total_to_pay' => 'required|numeric', // Total to Pay must be a required numeric field.
            'agreement_date' => 'required|date', // Agreement Date must be a required date.
            'interest_from' => 'required|date', // Interest From must be a required date.
            'last_pay' => 'nullable|date', // Last Pay can be a nullable date.
            'next_pay' => 'nullable|date', // Next Pay can be a nullable date.
            'remarks' => 'nullable|string', // Remarks can be a nullable string.
            'stage' => 'required|string',
            'pay_freq' => 'required|string',
            'no_of_pay' => 'required|integer',
            'pay_amount' => 'required|numeric',
            'stage_total' => 'required|numeric',
            'first_pay_date' => 'required|date',
            'last_pay_date' => 'required|date',
            'stage_remarks' => 'string',
        ];
    }
}
