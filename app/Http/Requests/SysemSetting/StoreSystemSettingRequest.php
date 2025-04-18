<?php

namespace App\Http\Requests\SysemSetting;

use Illuminate\Foundation\Http\FormRequest;

class StoreSystemSettingRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }


    public function rules(): array
    {
        return [
            'name' => ['required', 'string'],
            'address' => ['required', 'string'],
            'footer_description' => ['required'],
            'phone_number' => ['required', 'string'],
            'telephone_number' => ['required', 'string'],
            'email' => ['required', 'string'],
            'logo1' => ['nullable', 'image'],
            'logo2' => ['nullable', 'image'],
            'map_url' => ['nullable', 'url'],
            'instagram_url' => ['nullable', 'url'],
            'facebook_url' => ['nullable', 'url'],
            'youtube_url' => ['nullable', 'url'],
            'twitter_url' => ['nullable', 'url'],
        ];
    }
}
