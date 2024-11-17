<?php

namespace App\Http\Requests\Setting;

use Illuminate\Foundation\Http\FormRequest;

class StoreSettingRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }


    public function rules(): array
    {
        return [
            'image' => ['nullable','image', 'mimes:png,jpg,jpeg'],
            'address' => ['required','string'],
            'contact_number' => ['required','string'],
            'telephone_number' => ['required','string'],
            'facebook_url' => ['nullable', 'url'],
            'youtube_url' => ['nullable', 'url'],
            'tiktok_url' => ['nullable', 'url'],
            'map_url' => ['nullable', 'url'],
            'college_name' => ['required','string'],
            'email' => ['required', 'email'],
            'footer_description' => ['required'],
        ];
    }
}
