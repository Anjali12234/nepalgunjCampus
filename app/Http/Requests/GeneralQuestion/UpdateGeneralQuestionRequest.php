<?php

namespace App\Http\Requests\GeneralQuestion;

use Illuminate\Foundation\Http\FormRequest;

class UpdateGeneralQuestionRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }


    public function rules(): array
    {
        return [
            'title' => ['required', 'string'],
            'type' => ['required', 'string'],
            'description' => ['required'],
        ];
    }
}
