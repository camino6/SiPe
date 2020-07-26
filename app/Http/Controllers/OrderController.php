<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        return view('order.index', ['orders' => Order::all()]);
    }

    public function show($id)
    {
        return view('order.show', ['order' => Order::findOrFail($id)]);
    }

    public function create()
    {
        return view('order.create');
    }

    public function store(Request $request)
    {
        Order::create($request->all());

        return redirect()->route('order.index');
    }

    public function edit($id)
    {
        $order = Order::findOrFail($id);
        return view('order.edit', ['order' => $order]);
    }

    public function update($id, Request $request)
    {
        $order = Order::findOrFail($id);
        $order->update($request->all());

        return redirect()->route('order.index');
    }

    public function delete($id)
    {
        $order = Order::findOrFail($id);
        return view('order.delete', ['order' => $order]);
    }

    public function destroy($id)
    {
        Order::findOrFail($id)->delete();
        return redirect()->route('order.index');
    }
}
