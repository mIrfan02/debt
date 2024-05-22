<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DebtorRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }


    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'dob' => 'required|date',
            'ssn' => 'required|string|max:255',
            'position' => 'required|string|max:255',
            'company' => 'required|string|max:255',
            'driver_license1' => 'required|string|max:255',
            'organization' => 'required|string|max:255',
            'driver_license2' => 'nullable|string|max:255',
            'email' => 'nullable|email',
            'phone' => 'nullable|string|max:255',
            'fax' => 'nullable|string|max:255',
            'alias1' => 'nullable|string|max:255',
            'cell' => 'nullable|string|max:255',
            'other' => 'nullable|string|max:255',
            'alias2' => 'nullable|string|max:255',
            'remarks' => 'nullable|string',
            'status' => 'required|in:0,1',
            'client_id' => '',
            'addresses' => 'array',

            'addresses.*.id' => 'nullable',
            'addresses.*.street' => 'required|string',
            'addresses.*.city' => 'required|string',
            'addresses.*.country' => 'required|string',
            'addresses.*.state' => 'required|string',
            'addresses.*.zip' => 'required|string',
            'addresses.*.type' => 'required|string',
            'addresses.*.status' => 'required|string',
            'addresses.*.remarks' => 'nullable|string',

            'bank_accounts' => 'array',
            'bank_accounts.*.id' => 'nullable',

            'bank_accounts.*.bank_name' => 'required|string',
            'bank_accounts.*.branch_name' => 'required|string',
            'bank_accounts.*.bank_code' => 'required|string',
            'bank_accounts.*.address' => 'required|string',
            'bank_accounts.*.account_name' => 'required|string',
            'bank_accounts.*.account_number' => 'required|string',
            'bank_accounts.*.city' => 'required|string',
            'bank_accounts.*.state' => 'required|string',
            'bank_accounts.*.zip' => 'required|string',
            'bank_accounts.*.department' => 'required|string',
            'bank_accounts.*.country' => 'required|string',
            'bank_accounts.*.contact' => 'required|string',
            'bank_accounts.*.phone' => 'required|string',
            'bank_accounts.*.position' => 'required|string',
            'bank_accounts.*.fax' => 'required|string',
            'bank_accounts.*.cell' => 'required|string',
            'bank_accounts.*.email' => 'nullable|email',
            'bank_accounts.*.other' => 'nullable|string',
            'bank_accounts.*.remarks' => 'nullable|string',

            'assets' => 'array',
            'assets.*.id' => 'nullable',

            'assets.*.name' => 'required|string',
            'assets.*.value' => 'required|string',
            'assets.*.remarks' => 'nullable|string',

            'employments' => 'array',
            'employments.*.id' => 'nullable',
            'employments.*.employer' => 'required|string',
            'employments.*.employee_name' => 'required|string',
            'employments.*.position' => 'required|string',
            'employments.*.address' => 'required|string',
            'employments.*.city' => 'required|string',
            'employments.*.state' => 'required|string',
            'employments.*.zip' => 'required|string',
            'employments.*.pay_amount' => 'required|integer',
            'employments.*.pay_period' => 'required|string',
            'employments.*.date_last_paid' => 'required|date',
            'employments.*.date_last_commenced' => 'required|date',
            'employments.*.country' => 'required|string',
            'employments.*.phone' => 'required|string',
            'employments.*.fax' => 'required|string',
            'employments.*.cell' => 'required|string',
            'employments.*.other' => 'nullable|string',
            'employments.*.date_ceased' => 'nullable|date',
            'employments.*.length_of_service' => 'nullable|string',
            'employments.*.remarks' => 'nullable|string',

        ];
    }
}
