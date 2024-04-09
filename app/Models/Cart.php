<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    // protected $fillable = [
    //     'user_id',
    //     'cart_id',
    //     'product_id',
    //     'quantity'
    // ];
    public function items()
    {
        return $this->hasMany(Item::class);
    }
}
