<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClientRequest extends FormRequest
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
        // Clients Details
        'person' => 'required|string',
        'position' => 'nullable|string',
        'client_number' => 'nullable|string',
        'organization' => 'nullable|string',
        'collector' => 'nullable|string',
        'display_as' => 'nullable|string',
        'email' => 'nullable|email',
        'phone' => 'nullable|string',
        'address' => 'nullable|string',
        'cell' => 'nullable|string',
        'fax' => 'nullable|string',
        'city' => 'nullable|string',
        'state' => 'nullable|string',
        'zip' => 'nullable|string',
        'country' => 'nullable|string',
        'remarks' => 'nullable|string',

        // Creditor Details
        'creditor' => 'nullable|string',
        'creditor_number' => 'nullable|string',
        'creditor_organization' => 'nullable|string',
        'creditor_collector' => 'nullable|string',
        'creditor_display_as' => 'nullable|string',
        'creditor_email' => 'nullable|email',
        'creditor_phone' => 'nullable|string',
        'creditor_address' => 'nullable|string',
        'creditor_cell' => 'nullable|string',
        'creditor_fax' => 'nullable|string',
        'creditor_city' => 'nullable|string',
        'creditor_state' => 'nullable|string',
        'creditor_zip' => 'nullable|string',
        'creditor_country' => 'nullable|string',
        'creditor_remarks' => 'nullable|string',

        // Original Details
        'creditor_amount' => 'nullable|numeric',
        'creditor_open_date' => 'nullable|date',
        'creditor_line_2' => 'nullable|string',
        'interest_amount' => 'nullable|numeric',
        'interest_date' => 'nullable|date',
        'account_no' => 'nullable|string',
        'suit_fee' => 'nullable|numeric',
        'date_stay_lifted' => 'nullable|date',

        // Credit Bureau Details
        'original_open_date' => 'nullable|date',
        'delinquency_date' => 'nullable|date',
        'terms_duration' => 'nullable|string',
        'credit_limit' => 'nullable|string',
        'payment_history' => 'nullable|string',
        'experian_code' => 'nullable|string',
        'original_amount' => 'nullable|numeric',
        'amount_past_due' => 'nullable|numeric',
        'transUnion_code' => 'nullable|string',
        'charge_off_amount' => 'nullable|numeric',
        'billing_day_of_month' => 'nullable|string',
        'equifax_code' => 'nullable|string',
        'monthly_payment' => 'nullable|numeric',
        'residence_code' => 'nullable|string',
        'invoice_code' => 'nullable|string',
    ];
}
}
