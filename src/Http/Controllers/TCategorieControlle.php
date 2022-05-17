<?php

namespace viandry\andreylb3\Http\Controllers;

use viandry\andreylb3\Models\Item;

class TCategorieControlle
{
    public function show(Request $request)
    {
        $categories = DB::table('TCategories');
        $titles = array_keys($categories);
        return view('categoriesDisplay')->with(["data" => $categories, 'type' => "categorie", 'titles' => $titles]);
    }

    public function delete(Request $request)
    {
        DB::table('TCategories')->where('id', '=', $request->input('id'))->delete();
    }

    public function add(Request $request)
    {
        DB::table('TCategories')->insert([
            'name' => $request->input('name'),
        ]);
    }

    public function change(Request $request)
    {
        DB::table('TCategories') ->updateOrInsert(
            ['id' => $request->input('id')],
            ['name' => $request->input('name')]
        );
    }


}