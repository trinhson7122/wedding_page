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
        Cart::query()->where('id_account', '=', $this->id)->delete();
        $this->delete();
    }
}
