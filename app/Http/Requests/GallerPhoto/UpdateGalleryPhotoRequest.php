<?php

namespace App\Http\Requests\GallerPhoto;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateGalleryPhotoRequest extends FormRequest
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
            'title' => ['required', 'string'],
            'gallery_id' => ['required', Rule::exists('galleries','id')->withoutTrashed()],

            'files' => ['nullable', 'array'],
            'files.*' => ['mimes:png,jpg,jpeg,pdf,jfif,webp'],
        ];
    }
}
