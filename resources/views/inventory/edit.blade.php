@extends('layouts.master')
@section('title')
    Item Edit Page
@endsection

@section('content')
    <div class=" mt-3 ">

        <form action="{{ route('item.update', $item->id) }}" method="post">
            @method('put')
            @csrf
            <div>
                <label for="" class=" form-label">Name</label>
                <input type="text"  value="{{$item->name}}" class=" form-control" name="name">
            </div>
            <div>
                <label for="" class=" form-label">Price</label>
                <input type="number" value="{{$item->price}}" class=" form-control" name="price">
            </div>
            <div>
                <label for="" class=" form-label">Stock</label>
                <input type="number" value="{{$item->stock}}" class=" form-control" name="stock">
            </div>
            <button class=" my-3 btn btn-primary ">Update Item</button>
        </form>
    </div>
@endsection
