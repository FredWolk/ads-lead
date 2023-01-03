<?php

namespace App\Http\Requests\Articles;

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
            'name'                      => 'required|string',
            'link'                      => 'required|string',
            'pt_name'                   => 'string',
            'type'                      => 'required|string',
            'image'                     => 'image',
            'pt_image'                  => 'image',
            'prev_text'                 => 'nullable|string',
            'pt_prev_text'              => 'nullable|string',
            'views'                     => 'nullable|integer',
            'author_id'                 => 'required|integer',
            'tags'                      => 'array|nullable',
            'contents'                  => 'array|nullable',
            'pt_contents'               => 'array|nullable',
            'for_whom'                  => 'array|nullable',
            'pt_for_whom'               => 'array|nullable',
            'main_text'                 => 'required|string',
            'pt_main_text'              => 'required|string',
            'title'                     => 'nullable|string',
            'description'               => 'nullable|string',

            'keywords'                  => 'nullable|string',
            'meta_tags'                 => 'nullable|string',
            'og_title'                  => 'nullable|string',
            'og_description'            => 'nullable|string',
            'og_url'                    => 'nullable|string',
            'og_image'                  => 'nullable|string',
            'og_type'                   => 'nullable|string',
            'og_tags'                   => 'nullable|string',
            'pt_title'                  => 'nullable|string',
            'pt_description'            => 'nullable|string',
            'pt_keywords'               => 'nullable|string',
            'pt_meta_tags'              => 'nullable|string',
            'pt_og_title'               => 'nullable|string',
            'pt_og_description'         => 'nullable|string',
            'pt_og_url'                 => 'nullable|string',
            'pt_og_image'               => 'nullable|string',
            'pt_og_type'                => 'nullable|string',
            'pt_og_tags'                => 'nullable|string',
        ];
    }
}
