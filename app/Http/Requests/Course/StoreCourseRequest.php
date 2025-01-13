<?php

namespace App\Http\Requests\Course;

use Illuminate\Foundation\Http\FormRequest;

class StoreCourseRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }


    public function rules(): array
    {
        return [
            'course_title' => ['required', 'string'],
            'course_code' => ['required', 'string'],
            'course_pdf' => ['required','mimes:png,jpg,jpeg,pdf,jfif'],
            'credit_hr' => ['nullable'],
            'lecture_hr' => ['nullable'],
            'tution_hr' => ['nullable'],
            'total_hr' => ['nullable'],
            'lab_hr' => ['nullable'],
            'semester_id' => ['required', 'string'],
        ];
    }
}
