<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartDetail extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_cart',
        'id_product',
        'amount',
        'price',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class, 'id_product', 'id');
    }

    public function sumPrice(): float
    {
        return $this->amount * $this->price;
    }
}