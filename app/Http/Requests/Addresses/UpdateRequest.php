<?php

namespace App\Http\Requests\Addresses;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'street' => "required|min:5|max:50|",
            'internal_num' => "required|integer",
            'external_num' => "required|integer",
            'neighborhood' => "required|min:3|max:40",
            'town' => "required|min:3|max:40",
            'state' => "required|min:3|max:40",
            'country' => "required|min:3|max:40",
            'postal_code' => "required|integer",
            'references' => "required|min:10|max:50"
        ];
    }
}
