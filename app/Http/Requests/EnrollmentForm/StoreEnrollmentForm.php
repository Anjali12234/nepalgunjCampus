<?php

namespace App\Http\Requests\EnrollmentForm;

use Illuminate\Foundation\Http\FormRequest;

class StoreEnrollmentForm extends FormRequest
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
            'name' => ['required', 'string'],
            'email' => ['required', 'email'],
            'phone_no' => ['required', 'string', 'regex:/^(?:\+977[- ]?)?(97|98)\d{8}$/'],
            'message' => ['required', 'string'],
            'address' => ['required', 'string'],
            'college_name' => ['required', 'string'],
            'faculty' => ['required', 'string'],
            'photo_of_id_card' => ['required', 'image'],
            'photo_of_post_shared' => ['required', 'image'],
        ];
    }
}
