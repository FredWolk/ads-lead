<?php

namespace App\Http\Requests\Events;

use Illuminate\Foundation\Http\FormRequest;

class UpdateEventsRequest extends FormRequest
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
            'type' => 'nullable|string',
            'location' => 'nullable|string',
            'pt_location' => 'nullable|string',
            'organizer' => 'nullable|string',
            'date' => 'nullable|string',
            'pt_date' => 'nullable|string',
            'image' => 'nullable|image',
            'pt_image' => 'nullable|image',
            'content' => 'nullable|string',
            'pt_content' => 'nullable|string',
            'form_date' => 'nullable|string',
            'pt_form_date' => 'nullable|string',
            'form_location' => 'nullable|string',
            'pt_form_location' => 'nullable|string',
            'form_social' => 'nullable|string',
            'form_site' => 'nullable|string',
            'filtration_date' => 'nullable|string',
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
