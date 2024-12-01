<?php

namespace App\Http\Requests\Gallery;

use Illuminate\Foundation\Http\FormRequest;

class UpdateGalleryRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }


    public function rules(): array
    {
        return [
            'title' => ['required', 'string'],
            'files' => ['nullable', 'array'],
            'files.*' => ['mimes:png,jpg,jpeg,pdf,jfif'],
        ];
    }
}
