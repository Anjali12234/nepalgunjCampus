<?php

namespace App\Http\Requests\Programme;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProgrammeRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }


    public function rules(): array
    {
        return [
            'programme_short_name' => ['required', 'string'],
            'programme_full_name' => ['required', 'string'],
            'university' => ['required', 'string'],
            'years' => ['required'],
        ];
    }
}
