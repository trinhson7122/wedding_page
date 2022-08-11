<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateAccountRequest extends FormRequest
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
            'phone' => [
                'required',
                'numeric',
            ],
            'address' => [
                'nullable',
                'string',
            ],
            'username' => [
                'nullable',
                'string',
            ],
            'password' => [
                'nullable',
                'string',
            ],
        ];
    }
}
