<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PaymentRequest extends FormRequest
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
        'claim_id'=>'required',
        'payment_method' => 'nullable|string',
        'amount' => 'required|numeric|min:0.01',
        'comment' => 'nullable|string',
        'date_paid' => 'required|date',
        'category' => 'nullable|string',
        'debtor_claim_number' => 'nullable|string',
        'client_name' => 'nullable|string',
        'payment_type' => 'nullable|string',
        'paid_by' => 'nullable|string',
        'paid_to' => 'nullable|string',
        'final_payment' => 'nullable|string',
        ];
    }
}
