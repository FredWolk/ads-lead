<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCpaSeoFilterRequest extends FormRequest
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
            'filter_name' => 'string|required',
            'seo_text' => 'string|nullable',
            'title' => 'string|nullable',
            'description' => 'string|nullable',
            'keywords' => 'string|nullable',
            'og_title' => 'string|nullable',
            'og_description' => 'string|nullable',
            'og_url' => 'string|nullable',
            'og_image' => 'string|nullable',
            'og_type' => 'string|nullable',
            'meta_tags' => 'string|nullable',
            'og_tags' => 'string|nullable',
        ];
    }
}
