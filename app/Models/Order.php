<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'status',
        'user_id',
        'cart_id',
        'commmande'
    ];
    public function commandes()
    {
        return $this->belongsTo(Cart::class);
    }
}
