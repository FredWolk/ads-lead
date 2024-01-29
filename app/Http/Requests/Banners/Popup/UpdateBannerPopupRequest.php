<?php

namespace App\Http\Requests\Banners\Popup;

use Illuminate\Foundation\Http\FormRequest;

class UpdateBannerPopupRequest extends FormRequest
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
            'logo' => 'file|nullable',
            'title' => 'string|required',
            'page' => 'string|required',
            'text' => 'string|required',
            'button_text' => 'string|required',
            'button_link' => 'url|required',
            'hover_color' => 'string|required',
            'hover_text_color' => 'string|required',
            'color_back' => 'string|required',
            'color_text' => 'string|required',
            'popup_color_back' => 'string|required',
            'popup_color_text' => 'string|required',
        ];
    }
}
