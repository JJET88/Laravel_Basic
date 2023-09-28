<?php

namespace App\Http\Controllers;

use App\Http\Resources\ItemResource;
use App\Models\Item;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ItemApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __construct()
    {
        $this->middleware("cat");
        // $this->middleware("cat")->except("index");
        // $this->middleware("cat")->only("index");
    }
    public function index()
    {
       
        

        $items = Item::paginate(5)->withQueryString();
        // return response()->json($items, 200);
        return ItemResource::collection($items);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     "name"=>"required|unique:items,name",
        //     "price"=>"required",
        //     "stock"=>"required"
        // ]);
        $validator = Validator::make(
            $request->all(),
            [
                "name" => "required|unique:items,name",
                "price" => "required",
                "stock" => "required"
            ]
        );
        if($validator->fails()){
            return response()->json($validator->messages(),422);
        }

        $item = Item::create([
            "name" => $request->name,
            "price" => $request->price,
            "stock" => $request->stock
        ]);
        return response()->json($item);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $item = Item::find($id);
        if (is_null($item)) {
            return response()->json(["message" => "not found"], 404);
        }
        // return response()->json($item, 200);
        return new ItemResource($item);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validator = Validator::make(
            $request->all(),
            [
                "name" => "required|unique:items,name",
                "price" => "required",
                "stock" => "required"
            ]
        );
        if($validator->fails()){
            return response()->json($validator->messages(),422);
        }
        $item = Item::find($id);
        if (is_null($item)) {
            return response()->json(["message" => "not found"], 404);
        }
        $item->update([
            "name" => $request->name,
            "price" => $request->price,
            "stock" => $request->stock
        ]);
        return response()->json($item);
    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $item = Item::find($id);
        if (is_null($item)) {
            return response()->json(["message" => "not found"], 404);
        }
        $item->delete();
        return response()->json(["message" => "Item was deleted"], 204);
    }
}
