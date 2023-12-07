<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function store(Request $request)
    {
        $order = new Order([
            'email' => $request->email,
            'name' => $request->name,
            'phone' => preg_replace('/[^\d]/', '', $request->phone),
            'plan' => Order::plan($request->plan),
            'status' => ORder::STATUS_NEW,
        ]);

        $order->save();
        
        return redirect()->route('main', ['success' => true]);
    }
}
