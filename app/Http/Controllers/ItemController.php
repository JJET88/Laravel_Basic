<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function create(){
        return view('inventory.create');
    }
    public function index(){
        // $items =new Item();
        // $all = $items->all();
        // return $all;
        return view('inventory.index',[
            "items"=>Item::all()
        ]);
    }

    public function store(Request $request){
        $item = new Item();
        $item->name = $request->name;
        $item->price = $request->price;
        $item->stock = $request->stock;
        $item->save();

        // return $item;
        // return $request;
        return redirect()->route("item.index");
    }
}
