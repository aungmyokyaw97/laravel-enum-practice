<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Order;
use Illuminate\Http\Request;
use App\Enums\OrderStatus;

class PageController extends Controller
{

    public function orderTest()
    {
        $order = Order::take(10)->get();
        //dd($order->first()->status->name);
        //dd($order->first()->status->color());        
        //dd($order->first()->status->message());
        return view('order_list',compact('order'));

    }

    public function orderCreate()
    {
         $order = new Order();
         $order->user_id = 10;
         $order->item_id = 11;
         $order->status = 3; //OrderStatus::Approved;
         $order->save();
         return 'success';
    }

}
