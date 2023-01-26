<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    public function createorder(Request $request)
    {
        return Order::create([

        'total'=>$request->full_name,
        'VAT'=>$request->VAT,
        'order_type'=> $request->order_type

        ]);
    }

    public function show()
    {
        return Order::all();

    }

    public function pick($id)
    {
        return Order::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        return Order::find($id)->update([

            'total'=>$request->total,
            'VAT'=>$request->VAT,
            'order_type'=> $request->order_type

        ]);
    }

    public function delete($id)
    {
        return Order::find($id)->delete();
    }
}
