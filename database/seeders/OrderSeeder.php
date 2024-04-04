<?php

namespace Database\Seeders;

use App\Models\Order;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Order::create([
            
            'status' => 'En cours',
            'user_id' => '10',
            'cart_id' => '123',
            'commande' => 'bougie iron man'
        ]);
        Order::create([
            
            'status' => 'En cours',
            'user_id' => '10',
            'cart_id' => '121',
            'commande' => 'bougie iron man'
        ]);
        Order::create([
            
            'status' => 'terminé',
            'user_id' => '5',
            'cart_id' => '100',
            'commande' => 'bougie super'
        ]);
    }
}
