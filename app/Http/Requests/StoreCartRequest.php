<?php

namespace App\Http\Requests;

use App\Models\Account;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreCartRequest extends FormRequest
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
            'id_account' => [
                'required',
                'numeric',
                Rule::exists(Account::class, 'id'),
            ],
            'sum_price' => [
                'regex:/^(0)|([1-9]{1}[0-9]*(\.[0-9]+)?)$/',
            ],
        ];
    }
}
