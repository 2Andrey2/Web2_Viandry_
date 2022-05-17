<?php

namespace viandry\andreylb3\Http\Controllers;

use viandry\andreylb3\Models\Item;

class TProductController
{
    public function show(Request $request)
    {
        $products = DB::table('TProducts');
        $titles = array_keys($products);
        return view('productsDisplay')->with(["data" => $products, 'type' => "product", 'titles' => $titles]);
    }

    public function delete(Request $request)
    {
        DB::table('TProducts')->where('id', '=', $request->input('id'))->delete();
    }

    public function add(Request $request)
    {
        DB::table('TProducts')->insert([
            'status' => $request->input('status'),
            'delivery' => $request->input('delivery'),
        ]);
    }

    public function change(Request $request)
    {
        DB::table('TProducts') ->updateOrInsert(
            ['id' => $request->input('id')],
            [
                'name' => $request->input('name'),
                'type' => $request->input('type'),
                'supplier' => $request->input('supplier'),
                'warehouse' => $request->input('warehouse'),
                'client' => $request->input('client'),
                'order' => $request->input('order'),
            ]
        );
    }
}