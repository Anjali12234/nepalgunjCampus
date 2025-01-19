<?php

namespace App\Http\Requests\Teacher;

use Illuminate\Foundation\Http\FormRequest;

class UpdateTeacherRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

   
    public function rules(): array
    {
        return [
            'teacher_name' => ['required','string'],
            'faculty_name' => ['required','string'],
            'image' => ['nullable','image'],
           'email' => ['nullable'],
            'phone_number' => ['nullable'],
            'address' => ['nullable'],
            'facebook_url' => ['nullable'],
            'instagram_url' => ['nullable'],
            'description' => ['required'],
        ];
    }
}
