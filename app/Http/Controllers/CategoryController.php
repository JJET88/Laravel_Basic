<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('category.index',[
            "category"=>Category::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $category = new Category();
        $category->title = $request->title;
        $category->description = $request->description;
        $category->save();
        return redirect()->route("category.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        return view("category.show",['category'=>$category]);
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        return view("category.edit",["category" =>$category]);
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
      
        $category->title = $request->title;
        $category->description = $request->description;
        $category->update();
        return redirect()->route("category.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->back();
    }
}
