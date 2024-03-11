<?php

namespace App\Http\Requests\Front;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class ConverterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return $this->method() === 'POST';
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'integer' => 'required|integer|min:1|max:100000',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'integer.required' => 'Please enter a number',
            'integer.integer' => 'Please enter a valid number',
            'integer.min' => 'Please enter a number greater than 0',
            'integer.max' => 'Please enter a number less than 100,000',
        ];
    }
}
