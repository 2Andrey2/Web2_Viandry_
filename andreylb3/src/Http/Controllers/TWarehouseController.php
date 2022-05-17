<?php

namespace viandry\andreylb3\Http\Controllers;

use viandry\andreylb3\Models\Item;

class TWarehouseController
{
    public function show(Request $request)
    {
        $warehouses = DB::table('TWarehouses');
        $titles = array_keys($warehouses);
        return view('warehousesDisplay')->with(["data" => $warehouses, 'type' => "warehouse", 'titles' => $titles]);
    }

    public function delete(Request $request)
    {
        DB::table('TWarehouses')->where('id', '=', $request->input('id'))->delete();
    }

    public function add(Request $request)
    {
        DB::table('TWarehouses')->insert([
            'number' => $request->input('name'),
            'addressname' => $request->input('type'),
            'telephone' => $request->input('supplier'),
        ]);
    }

    public function change(Request $request)
    {
        DB::table('TWarehouses') ->updateOrInsert(
            ['id' => $request->input('id')],
            [
                'name' => $request->input('name'),
                'addressname' => $request->input('type'),
                'telephone' => $request->input('supplier'),
            ]
        );
    }
}