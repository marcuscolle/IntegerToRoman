<?php

namespace App\Http\Requests\Front;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Psr\Container\ContainerExceptionInterface;
use Psr\Container\NotFoundExceptionInterface;

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

        $rules = [];

        if (is_numeric($this->input('converter'))) {
            $rules['converter'] = ['required', 'numeric', 'min:1', 'max:100000'];
        } else {
            $rules['converter'] = ['required', 'regex:/^[MDCLXVI]+$/i'];
        }

        return $rules;

    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'converter.required' => 'The number field is required.',
            'converter.numeric' => 'The number field must be a number.',
            'converter.min' => 'The number field must be between 1 and 100000.',
            'converter.max' => 'The number field must be between 1 and 100000.',
            'converter.regex' => 'The number field must be a valid Roman numeral.',
        ];
    }
}
