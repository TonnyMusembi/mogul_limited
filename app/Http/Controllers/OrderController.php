<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    //

    public function index()
    {

        // $order = Order::with('vehicle')->orderby('status')->get();
        // return response()->json($order);
        return Order::all();
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'status' => 'required',
            'vehicle_id' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json(['status' => 422, 'errors' => $validator->errors()]);
        } else {

        Order::create([
            'vehicle_id' => $request->input('vehicle_id'),
            'status' => $request->input('status'),

        ]);}
        return response()->json(['req' => $request]);

    }

    public function create()
    {

        //return view('order.create');
        return response()->json();
    }
}
