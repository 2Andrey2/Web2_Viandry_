<?php

namespace viandry\andreylb3\Http\Controllers;

use viandry\andreylb3\Models\Item;

class TOrderController
{
    public function show(Request $request)
    {
        $orders = DB::table('TOrders');
        $titles = array_keys($orders);
        return view('ordersDisplay')->with(["data" => $orders, 'type' => "order", 'titles' => $titles]);
    }

    public function delete(Request $request)
    {
        DB::table('TOrders')->where('id', '=', $request->input('id'))->delete();
    }

    public function add(Request $request)
    {
        DB::table('TOrders')->insert([
            'status' => $request->input('status'),
            'delivery' => $request->input('delivery'),
        ]);
    }

    public function change(Request $request)
    {
        DB::table('TOrders') ->updateOrInsert(
            ['id' => $request->input('id')],
            [
                'status' => $request->input('status'),
                'delivery' => $request->input('delivery'),
            ]
        );
    }
}