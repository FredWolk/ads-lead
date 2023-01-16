<?php

namespace App\Http\Requests\Services;

use Illuminate\Foundation\Http\FormRequest;

class UpdateServicesRequest extends FormRequest
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
            'is_recomendated' => 'required|boolean',
            'name' => 'required|string',
            'pt_name' => 'nullable|string',
            'logo' => 'nullable|image',
            'prev_text' => 'nullable|string',
            'pt_prev_text' => 'nullable|string',
            'url' => 'nullable|string',

            'promocode' => 'nullable|string',
            'promocode_desc' => 'nullable|string',
            'pt_promocode_desc' => 'nullable|string',
        ];
    }
}
