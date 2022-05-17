<?php

namespace viandry\andreylb3\Http\Controllers;

use viandry\andreylb3\Models\Item;

class TSupplierController
{
    public function show(Request $request)
    {
        $suppliers = DB::table('TSuppliers');
        $titles = array_keys($suppliers);
        return view('suppliersDisplay')->with(["data" => $suppliers, 'type' => "supplier", 'titles' => $titles]);
    }

    public function delete(Request $request)
    {
        DB::table('TSuppliers')->where('id', '=', $request->input('id'))->delete();
    }

    public function add(Request $request)
    {
        DB::table('TSuppliers')->insert([
            'name' => $request->input('name'),
            'addressname' => $request->input('type'),
            'telephone' => $request->input('supplier'),
        ]);
    }

    public function change(Request $request)
    {
        DB::table('TSuppliers') ->updateOrInsert(
            ['id' => $request->input('id')],
            [
                'name' => $request->input('name'),
                'addressname' => $request->input('type'),
                'telephone' => $request->input('supplier'),
            ]
        );
    }
}