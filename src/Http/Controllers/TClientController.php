<?php

namespace viandry\andreylb3\Http\Controllers;

use viandry\andreylb3\Models\Item;

class TClientController
{
    public function show(Request $request)
    {
        $clients = DB::table('TClients');
        $titles = array_keys($clients);
        return view('clientsDisplay')->with(["data" => $clients, 'type' => "client", 'titles' => $titles]);
    }

    public function delete(Request $request)
    {
        DB::table('TClients')->where('id', '=', $request->input('id'))->delete();
    }

    public function add(Request $request)
    {
        DB::table('TClients')->insert([
            'name' => $request->input('name'),
            'addressname' => $request->input('addressname'),
            'telephone' =>  $request->input('telephone'),
        ]);
    }

    public function change(Request $request)
    {
        DB::table('TClients') ->updateOrInsert(
            ['id' => $request->input('id')],
            [
                'name' => $request->input('name'),
                'addressname' => $request->input('addressname'),
                'telephone' =>  $request->input('telephone'),
            ]
        );
    }
}