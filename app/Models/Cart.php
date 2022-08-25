<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_account',
        'sum_price',
    ];
    public function account()
    {
        return $this->belongsTo(Account::class, 'id_account', 'id');
    }
    public function formatPrice(float $price, string $location = ""): string
    {
        return number_format($price) . " $location";
    }
    public function sumPrice(): float
    {
        $sum = 0;
        $CartDetails = CartDetail::query()->where('id_cart', '=', $this->id)->with('product')->get();
        foreach($CartDetails as $each)
        {
            $sum += $each->amount * $each->product->price;
        }
        return $sum;
    }
    public function sumTypePrice(int $type): float
    {
        $price = 0;
        $carts = CartDetail::query()->where('id_cart', '=', $this->id)->with('product')->get();
        foreach($carts as $cart)
        {
            if($cart->product->id_type == $type)
            {
                $price += $cart->amount * $cart->price;
            }
        }
        return $price;
    }
    public function hasType(int $type): bool
    {
        $carts = CartDetail::query()->where('id_cart', '=', $this->id)->with('product')->get();
        foreach($carts as $cart)
        {
            if($cart->product->id_type == $type)
            {
                return true;
            }
        }
        return false;
    }
    public function deleteRelated()
    {
        CartDetail::query()->where('id_cart', '=', $this->id)->delete();
        $this->delete();
    }
}
