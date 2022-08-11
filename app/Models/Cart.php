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
}
