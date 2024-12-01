<?php

namespace App\Http\Requests\About;

use Illuminate\Foundation\Http\FormRequest;

class UpdateAboutRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }


    public function rules(): array
    {
        return [
            'title' => ['required', 'string'],
            'video_url' => ['required', 'url'],
            'image' => ['nullable', 'image'],
            'description' => ['required'],
        ];
    }
}
