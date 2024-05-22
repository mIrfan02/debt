<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'contacts' => 'array',  
            'contacts.*.type' => 'required|string|max:255',
            'contacts.*.name' => 'required|string|max:255',
            'contacts.*.relation' => 'nullable|string|max:255',
            'contacts.*.phone' => 'nullable|string|max:255',
            'contacts.*.cell' => 'required|string|max:255',
            'contacts.*.status' => 'required|string|max:255',
        ];
    }
}
