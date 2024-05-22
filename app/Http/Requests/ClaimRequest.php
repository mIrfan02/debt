<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClaimRequest extends FormRequest
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
        $httpMethod = request()->method();

        if ($httpMethod == 'POST') {
            $rules = [
                'debtor_person' => 'required|string|max:255',
                'debtor_organization' => 'required|string|max:255',
                'placement_amount' => 'required|numeric',
                'interest_start_date' => 'required|date',
                'pre_judgment_interest' => 'required|numeric',
                'post_judgment_interest' => 'required|numeric',
                'client' => 'required|string|max:255',
                'creditor' => 'required|string|max:255',
                'claim_number' => 'required|string|max:255',
                'status' => 'required|string|max:255',
                'date_assigned' => 'required|date',
                'remarks' => 'required|string',
                'portfolio' => 'required|string|max:255',
                'type_of_debt' => 'required|string|max:255',
                'collector' => 'required|string|max:255',
                'method_contingency' => 'required|string|max:255',
                'debtor_id' => 'nullable',

                // 'client_claim_no'=> 'nullable',
                // 'creditor_claim_no'=>'nullable',
                // 'balance_amount'=>'nullable',
                // 'balance_date'=>'nullable',
                // 'date_closed'=>'nullable',
                // 'flags'=>'nullable',
                // 'reference'=>'nullable',
            ];
        }
        if ($httpMethod == 'PUT') {
            $rules = [
                'claim_number' => 'required|string|max:255',
                'status' => 'required|string|max:255',
                'collector' => 'required|string|max:255',
                'portfolio' => 'required|string|max:255',
                'date_assigned' => 'required|date',
                'client_claim_no' => 'nullable',

                'creditor_claim_no' => 'nullable',

                'balance_amount' => 'nullable',
                'balance_date' => 'nullable',

                'date_closed' => 'nullable',

                'flags' => 'nullable',
                'reference' => 'nullable',
            ];
        }

        return $rules;
    }
}
