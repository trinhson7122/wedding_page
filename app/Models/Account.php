<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'phone',
        'address',
        'username',
        'password',
    ];
    public function countOfCart() : int
    {
        return Cart::query()->where('id_account', '=', $this->id)->count();
    }
    public function deleteRelated()
    {
        $carts = Cart::query()->where('id_account', '=', $this->id)->get();
        foreach($carts as $cart)
        {
            $cart->deleteRelated();
        }
        $this->delete();
    }
}
