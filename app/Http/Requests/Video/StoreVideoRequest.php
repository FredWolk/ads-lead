<?php

namespace App\Http\Requests\Video;

use Illuminate\Foundation\Http\FormRequest;

class StoreVideoRequest extends FormRequest
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
            'name' => 'string',
            'link' => 'string',
            'pt_name' => 'nullable|string',
            'image' => 'nullable|image',
            'pt_image' => 'nullable|image',
            'tags' => 'nullable|array',
            'video' => 'nullable|string',
            'content' => 'nullable|string',
            'pt_content' => 'nullable|string',

            'title' => 'nullable|string',
            'description' => 'nullable|string',
            'keywords' => 'nullable|string',
            'og_title' => 'nullable|string',
            'og_description' => 'nullable|string',
            'og_url' => 'nullable|string',
            'og_image' => 'nullable|string',
            'og_type' => 'nullable|string',
            'meta_tags' => 'nullable|string',
            'og_tags' => 'nullable|string',
            'pt_title' => 'nullable|string',
            'pt_description' => 'nullable|string',
            'pt_keywords' => 'nullable|string',
            'pt_og_title' => 'nullable|string',
            'pt_og_description' => 'nullable|string',
            'pt_og_url' => 'nullable|string',
            'pt_og_image' => 'nullable|string',
            'pt_og_type' => 'nullable|string',
            'pt_meta_tags' => 'nullable|string',
            'pt_og_tags' => 'nullable|string',
        ];
    }
}
