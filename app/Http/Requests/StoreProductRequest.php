<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreProductRequest extends FormRequest
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
            'name' => [
                'required',
                'string',
            ],
            'id_type' => [
                'required',
                'numeric',
                Rule::exists('types', 'id'),
            ],
            'id_category' => [
                'required',
                'numeric',
                Rule::exists('categories', 'id'),
            ],
            'price' => [
                'required',
                'regex:/^[1-9]{1}[0-9]+(\.[0-9]+)?$/',
            ],
            'note' => [
                'string',
            ],
        ];
    }
}
