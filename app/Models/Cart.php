<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_account',
    ];
    public function account()
    {
        return $this->belongsTo(Account::class, 'id_account', 'id');
    }
    public function formatPrice(): string
    {
        return number_format($this->sumPrice()) . ' VND';
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
    public function deleteRelated()
    {
        CartDetail::query()->where('id_cart', '=', $this->id)->delete();
        $this->delete();
    }
}
