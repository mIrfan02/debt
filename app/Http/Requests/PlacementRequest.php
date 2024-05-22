<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PlacementRequest extends FormRequest
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

            'claim_id'=>'nullable',
            'placement_date' => 'required|date',
            'contigency_method' => 'required|string',
            'method_rate' => 'nullable',
            'interest_start_date' => 'required|date',
            'allocation_method' => 'required|string',
            'interest_rate' => 'required|string',
            'debt_type' => 'required|string',

            'sliding_scale' => 'nullable|array', // Validate sliding_scale as an array
            'sliding_scale.*.percentage' => 'nullable|numeric|min:0', // Validate each percentage field
            'sliding_scale.*.amount' => 'nullable|numeric|min:0', // Validate each amount field


            // Placement Components Validation
            'name' => 'required|array',
            'name.*' => 'required|string',

            'amount' => 'required|array',
            'amount.*' => 'required|numeric',

            'rate' => 'required|array',

            'rate.*' => 'numeric',

            'date' => 'required|array',

            'date.*' => 'nullable|date',

            'comments' => 'required|array',

            'comments.*' => 'nullable|string',


        ];
    }
}
