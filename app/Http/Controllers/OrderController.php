<?php

namespace App\Http\Controllers;

use App\Events\MyEvent;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index(){
        return view('order');
    }

    public function store(Request $request){
        $order = Order::find(1);
        // OrderShipmentStatusUpdated::dispatch($order);
        event(new MyEvent($order));
    }
}
