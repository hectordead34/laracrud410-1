<?php

namespace App\Http\Requests\Clients;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'name' => "required|min:5|max:40|",
            'last_name' => "required|min:5|max:40",
            'second_last_name' => "required|min:5|max:40",
            'email' => "required|min:5|max:40",
            'phone' => "required|integer",
            'address_id' => "required|integer",
            'state' => "required|min:5|max:40",
            'town' => "required|min:5|max:40",
        ];
    }
}
