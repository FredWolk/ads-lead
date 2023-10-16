<?php

namespace App\Http\Requests\AD;

use Illuminate\Foundation\Http\FormRequest;

class StoreAdRequest extends FormRequest
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
            'pt_name' => 'nullable|string',
            'image' => 'nullable|image',
            'pt_image' => 'nullable|image',
            'logo' => 'nullable|image',
            'prev_text' => 'nullable|string',
            'pt_prev_text' => 'nullable|string',
            'url' => 'nullable|string',
            'views' => 'nullable|integer',
            'listing_rating' => 'nullable|integer',

            'main_advertising_formats' => 'nullable|string',
            'advertising_formats' => 'nullable|array',
            'countries' => 'nullable|array',
            'payment_systems' => 'nullable|array',
            'minimum_top_up_amount' => 'nullable|array',

            'before_main_text' => 'nullable|string',
            'pt_before_main_text' => 'nullable|string',
            'main_text' => 'nullable|string',
            'pt_main_text' => 'nullable|string',

            'promocode' => 'nullable|string',
            'promocode_desc' => 'nullable|string',
            'pt_promocode_desc' => 'nullable|string',

            'date_of_creation' => 'nullable|string',
            'traffic_volume_per_month' => 'nullable|string',
            'formats' => 'nullable|string',
            'forbidden_subjects' => 'nullable|string',
            'average_click_price' => 'nullable|string',
            'top_up_methods' => 'nullable|string',
            'minimum_deposit' => 'nullable|string',
            'referral_program' => 'nullable|string',
            'tools' => 'nullable|string',

            'manager_image' => 'image|nullable',
            'manager_name' => 'string|nullable',
            'manager_position' => 'string|nullable',
            'manager_link' => 'string|nullable',

            'facebook' => 'nullable|string',
            'instagram' => 'nullable|string',
            'linkedin' => 'nullable|string',
            'forum_link' => 'nullable|string',
            'editorial_opinion' => 'nullable|string',

            'rating_support' => 'nullable|integer',
            'rating_traffic_quality' => 'nullable|integer',
            'rating_number_of_geos' => 'nullable|integer',
            'rating_price_per_click' => 'nullable|integer',

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
