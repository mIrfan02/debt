<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NoteRequest extends FormRequest
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
         'title' => 'required|string',
        'note' => 'required|string',
        'action' => 'required',
        'note_by' => 'required',
        'note_date' => 'nullable|date',
        'reviewed' => 'nullable',
        'review_by' => 'required_if:reviewed,true',
        'review_date' => 'required_if:reviewed,true|date',

        ];

    }
}
