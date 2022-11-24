<?php

namespace App\Http\Requests\Seo;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'page' => 'string|required',
            'title' => 'string|required',
            'description' => 'required',
            'keywords' => 'string',
            'meta_tags' => 'string',
            'og_tags' => 'string',
            'status' => 'boolean',
        ];
    }

    public function messages()
    {
        return [
            'title.string' => 'Поле TITLE должно быть строкой',
            'title.required' => 'Поле title обязательно к заполнению',
            'description.required' => 'Поле description обязательно к заполнению',
            'keywords.string' => 'Поле keywords должно быть строкой',
            'meta_tags.string' => 'Поле TITLE обязательно к заполнению',
            'og_tags.string' => 'Поле TITLE обязательно к заполнению'
        ];
    }
}
