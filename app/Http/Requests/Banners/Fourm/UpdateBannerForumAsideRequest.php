<?php

namespace App\Http\Requests\Banners\Fourm;

use Illuminate\Foundation\Http\FormRequest;

class UpdateBannerForumAsideRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'type' => 'required|string',
            'file' => 'file',
            'link' => 'required|URL',
            'status' => 'boolean',
        ];
    }
}
