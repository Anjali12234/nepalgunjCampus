<?php

namespace App\Http\Requests\StudentDetail;

use Illuminate\Foundation\Http\FormRequest;

class StoreStudentDetailRequest extends FormRequest
{
    public function authorize()
    {
        return true; 
    }

    public function rules()
    {
        return [
            'address' => ['nullable','string'],
            'phone_number' => ['nullable','digits_between:7,15'],
            'faculty_name' => ['nullable','string','max:255'],
            'registration_no' => ['nullable','numeric'],
            'facebook_url' => ['nullable','url'],
            'instagram_url' => ['nullable','url'],
            'description' => ['nullable'],
        ];
    }
}
