<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Coupon;
use App\Models\Order;
use App\Models\Prime;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $orders = Order::orderBy('id')->paginate(10);
        return view('orders.index',compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        $primes = Prime::orderby('id')->paginate();
        $coupons = Coupon::orderby('id')->paginate();
        $clients = Client::orderby('id')->paginate();

        //dd($clients);
        return view('orders.create',compact('clients','coupons','primes'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'client_id'=>'required',
            'prime_id'=>'required',
            'quantity'=>'required',
            'payment_method'=>'required'
        ]);

        $amount = ((Prime::find($request->prime_id))->amount) * $request->quantity;

        $order = $request->all();
        $order['folio'] = date('mdHis');
        $order['status'] = '5';
        $order['amount'] = "$amount";

        order::create($order);
        return redirect()->route('orders.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $order = order::find($id);
        $prime = Prime::find($order->prime_id);
        $coupon = Coupon::find($order->coupon_id);
        $client = Client::find($order->client_id);

        return view('orders.show',compact('order','client','coupon','prime'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {

        return view('orders.edit',compact('order'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {

        $request->validate([
            'status'=>'required|min:0|max:6',

        ]);
        $orden = Order::find($id);
        $order = $request->all();

        $orden->update($order);
        return redirect()->route('orders.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        $order->delete();
        return redirect()->route('orders.index');
    }
}
