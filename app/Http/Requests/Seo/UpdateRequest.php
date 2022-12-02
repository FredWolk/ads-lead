<?php

namespace App\Http\Requests\Seo;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            'page'                   => 'string',
            'title'                  => 'nullable|string',
            'description'            => 'nullable|string',
            'keywords'               => 'nullable|string',
            'meta_tags'              => 'nullable|string',
            'og_title'               => 'nullable|string',
            'og_description'         => 'nullable|string',
            'og_url'                 => 'nullable|string',
            'og_image'               => 'nullable|string',
            'og_type'                => 'nullable|string',
            'og_tags'                => 'nullable|string',
            'pt_title'               => 'nullable|string',
            'pt_description'         => 'nullable|string',
            'pt_keywords'            => 'nullable|string',
            'pt_meta_tags'           => 'nullable|string',
            'pt_og_title'            => 'nullable|string',
            'pt_og_description'      => 'nullable|string',
            'pt_og_url'              => 'nullable|string',
            'pt_og_image'            => 'nullable|string',
            'pt_og_type'             => 'nullable|string',
            'pt_og_tags'             => 'nullable|string',
            'status'                 => 'boolean',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Поле title обязательно к заполнению',
            'title.string' => 'Поле TITLE должно быть строкой',
            'description.required' => 'Поле description обязательно к заполнению',
            'keywords.string' => 'Поле keywords должно быть строкой',
            'meta_tags.string' => 'Поле мета теги должно быть строкой',
            'og_tags.string' => 'Поле OG теги должно быть строкой',
            'og_title' => 'Поле OG title должно быть строкой',
            'og_description' => 'Поле OG description должно быть строкой',
            'og_url' => 'Поле OG url должно быть строкой',
            'og_image' => 'Поле OG image должно быть строкой',
            'og_type' => 'Поле OG type должно быть строкой',
        ];
    }
}
