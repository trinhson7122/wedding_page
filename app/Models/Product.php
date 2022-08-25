<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'price',
        'note',
        'id_category',
        'id_type',
    ];
    public function category()
    {
        return $this->belongsTo(Category::class, 'id_category', 'id');
    }
    public function type()
    {
        return $this->belongsTo(Type::class, 'id_type', 'id');
    }
}
