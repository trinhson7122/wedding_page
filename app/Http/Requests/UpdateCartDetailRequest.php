<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateCartDetailRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'id_cart' => [
                'numeric',
                'required',
                Rule::exists(Cart::class, 'id'),
            ],
            'id_product' => [
                'numeric',
                'required',
                Rule::exists(Product::class, 'id'),
            ],
            'amount' => [
                'numeric',
                'required',
            ],
        ];
    }
}
