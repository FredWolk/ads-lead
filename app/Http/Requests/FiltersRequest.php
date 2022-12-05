<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FiltersRequest extends FormRequest
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
            'vertical' => 'array|nullable',
            'countries' => 'array|nullable',
            'payment_models' => 'array|nullable',
            'payment_schedule' => 'array|nullable',
            'payment_systems' => 'array|nullable',
            'advertising_formats' => 'array|nullable',
            'minimum_top_up_amount' => 'array|nullable',
        ];
    }
}
