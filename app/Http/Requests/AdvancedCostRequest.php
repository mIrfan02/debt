<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdvancedCostRequest extends FormRequest
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
            'claim_id' => 'nullable|exists:claims,id',
            'category' => 'required|string',
            'debtor_claim_number' => 'required|string',
            'client_name' => 'required|string',
            'cost_type' => 'required|string',
            'cost_date' => 'required|date',
            'effective_date' => 'required|date',
            'cost_amount' => 'required|numeric|min:0',
            'cost_method' => 'required|string',
            'check_no' => 'nullable|string',
            'advanced_by' => 'required|string',
            'charged_to' => 'required|string',
            'remarks' => 'nullable|string',
        ];
    }
}
