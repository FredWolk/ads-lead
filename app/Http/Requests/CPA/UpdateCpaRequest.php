<?php

namespace App\Http\Requests\CPA;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCpaRequest extends FormRequest
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
            'is_top' => 'required|boolean',
            'is_main' => 'required|boolean',
            'is_recomendated' => 'required|boolean',
            'name' => 'required|string',
            'link' => 'required|string',
            'pt_name' => 'string|nullable',
            'image' => 'image|nullable',
            'pt_image' => 'image|nullable',
            'logo' => 'image|nullable',
            'prev_text' => 'string|nullable',
            'pt_prev_text' => 'string|nullable',
            'url' => 'url|nullable',
            'views' => 'integer|nullable',
            'listing_rating' => 'integer|nullable',
            'main_verticales' => 'string|nullable',
            'verticales' => 'array|nullable',
            'countries' => 'array|nullable',
            'payment_models' => 'array|nullable',
            'payment_schedule_f' => 'array|nullable',
            'payment_systems' => 'array|nullable',
            'before_main_text' => 'string|nullable',
            'pt_before_main_text' => 'string|nullable',
            'main_text' => 'string|nullable',
            'pt_main_text' => 'string|nullable',
            'date_of_creation' => 'string|nullable',
            'geography_of_offers' => 'string|nullable',
            'themes_of_offers' => 'string|nullable',
            'inhaus_offers' => 'string|nullable',
            'minimum_withdrawal_amount' => 'string|nullable',
            'payment_methods' => 'string|nullable',
            'payment_schedule' => 'string|nullable',
            'referral_program' => 'string|nullable',
            'tools' => 'string|nullable',
            'manager_image' => 'file|nullable',
            'manager_name' => 'string|nullable',
            'manager_position' => 'string|nullable',
            'manager_link' => 'string|nullable',
            'facebook' => 'url|nullable',
            'instagram' => 'url|nullable',
            'linkedin' => 'url|nullable',
            'forum_link' => 'url|nullable',
            'editorial_opinion' => 'string|nullable',
            'pt_editorial_opinion' => 'string|nullable',
            'rating_support' => 'integer|nullable',
            'rating_payments' => 'integer|nullable',
            'rating_offers' => 'integer|nullable',
            'rating_betting' => 'integer|nullable',
            'title' => 'nullable|string',
            'description' => 'nullable|string',
            'keywords' => 'nullable|string',
            'meta_tags' => 'nullable|string',
            'og_title' => 'nullable|string',
            'og_description' => 'nullable|string',
            'og_url' => 'nullable|string',
            'og_image' => 'nullable|string',
            'og_type' => 'nullable|string',
            'og_tags' => 'nullable|string',
            'pt_title' => 'nullable|string',
            'pt_description' => 'nullable|string',
            'pt_keywords' => 'nullable|string',
            'pt_meta_tags' => 'nullable|string',
            'pt_og_title' => 'nullable|string',
            'pt_og_description' => 'nullable|string',
            'pt_og_url' => 'nullable|string',
            'pt_og_image' => 'nullable|string',
            'pt_og_type' => 'nullable|string',
            'pt_og_tags' => 'nullable|string',
        ];
    }
}
