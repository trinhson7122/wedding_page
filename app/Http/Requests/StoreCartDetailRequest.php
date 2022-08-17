<?php

namespace App\Http\Requests;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreCartDetailRequest extends FormRequest
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
