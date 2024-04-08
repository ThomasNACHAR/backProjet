<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable =
    [
        'name',
        'price',
        'stock',
        'image',
        'description',
        'category_id',
    ];
    // Dans le modèle Post

    public function productCartMany()
    {
        return $this->hasMany(Cart::class);
    }

}
