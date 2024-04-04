<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Http\Request\OrderRequest;

class OrderController extends Controller
{
    public function order(){
        $order->Order::all();
        return view('order')->with('order', $order);
    }
    public function validation(){
        return view('payment');
    }
    public function editOrder(OrderRequest $request)
    {
        $Order = Order::create($request->all());
        {
            $Order->save();
        }
        return redirect("order");
    }
    public function updateOrder(OrderRequest $request, $id)
    {
        $update = Order::find($id);
        
        $update->save();

        return redirect("order");
    }
    public function destroyOrder($id)
    {
        $delete = Order::find($id);
        $delete->delete($id);
        return redirect("order");
    }
}
