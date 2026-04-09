<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreContactLeadRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        $profile = $this->input('profile_type');

        return [
            'profile_type' => ['required', Rule::in(['investisseur', 'industriel'])],
            'name' => ['required', 'string', 'max:150'],
            'email' => ['required', 'email:rfc,dns', 'max:150'],
            'phone' => ['required', 'string', 'max:30'],
            'message' => ['required', 'string', 'min:10', 'max:2000'],
            'website' => ['nullable', 'max:0'],

            'land_location' => [Rule::requiredIf($profile === 'investisseur'), 'nullable', 'string', 'max:255'],
            'land_size_hectare' => [Rule::requiredIf($profile === 'investisseur'), 'nullable', 'numeric', 'min:0.1', 'max:100000'],
            'has_borehole' => [Rule::requiredIf($profile === 'investisseur'), 'nullable', 'boolean'],

            'company' => [Rule::requiredIf($profile === 'industriel'), 'nullable', 'string', 'max:150'],
            'job_title' => [Rule::requiredIf($profile === 'industriel'), 'nullable', 'string', 'max:150'],
            'requested_product' => [Rule::requiredIf($profile === 'industriel'), 'nullable', 'string', 'max:150'],
            'annual_volume' => [Rule::requiredIf($profile === 'industriel'), 'nullable', 'numeric', 'min:1', 'max:100000000'],
        ];
    }
}