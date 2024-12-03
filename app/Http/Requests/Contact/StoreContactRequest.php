<?php

namespace App\Http\Requests\Contact;

use Illuminate\Foundation\Http\FormRequest;

class StoreContactRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    
    public function rules(): array
    {
        return [
            'name' => ['required', 'string'],
            'email' => ['required', 'email'],
            'phone_number' => ['required', 'string', 'regex:/^(?:\+977[- ]?)?(97|98)\d{8}$/'],
            'message' => ['required', 'string'],
            'address' => ['required', 'string']
        ];
    }
}
