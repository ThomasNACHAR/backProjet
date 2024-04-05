<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Http\Requests\OrderRequest;

class OrderController extends Controller
{
    public function order($id){
        $orders = Order::find($id);
        return view('order')->with('orders', $orders);
    }
    public function checkout(){
        \Stripe\Stripe::setApiKey('sk_test_51P1nEhGek7YyB35dYAWQPndWl5PB8x0tqx1ENp4dy97A8SvOrqDlE7X9dC36BIdkcqANgZQsk1jJv7du5tkcH6JH00URG7xy5l');

        $URL = 'http://localhost:8000';

        $session = \Stripe\Checkout\Session::create([
            'payment_method_types' => ['card'],
            'line_items' => [[
                'price_data' => [
                    'currency' => 'eur',
                    'product_data' => [
                        'name' => 'Nom'
                    ],
                    'unit_amount' => 1400,
                ],
                'quantity' => 1,
            ]],
            'mode' => 'payment',
            'success_url' => "$URL/",
            'cancel_url' => "$URL/",
          ]);

          return redirect($session->url);
    }
    public function editOrder(OrderRequest $request)
    {
        $order = Order::create($request->all());
        {
            $order->save();
        }
        return redirect("order");
    }
    public function updateOrder(OrderRequest $request, $id)
    {
        $update = Order::find($id);
        $update->fill($request->all());
        $update->save();

        return redirect("order");
    }
    public function destroyOrder($id)
    {
        $delete = Order::find($id);
        $delete->delete();
        return redirect("order");
    }
    public function updateStatus($id,$request)
    {
        $updateStatus = Order::find($id);
        $updateStatus->update(['status'=> $request->input('status')]);
        return redirect("order");
    }
}
