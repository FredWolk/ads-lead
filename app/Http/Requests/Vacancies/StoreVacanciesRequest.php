<?php

namespace App\Http\Requests\Vacancies;

use Illuminate\Foundation\Http\FormRequest;

class StoreVacanciesRequest extends FormRequest
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
            'name' => 'string|required',
            'link' => 'string|required',
            'firma' => 'string|required',
            'salary' => 'integer|required',
            'location' => 'string|required',
            'text' => 'string|required',
            'is_top' => 'boolean',
            'linkedin' => 'string|nullable',
            'e_mail' => 'string|nullable',
            'telegram' => 'string|nullable',

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
        ];
    }
}
