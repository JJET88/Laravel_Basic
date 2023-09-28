@extends('layouts.master')
@section('title')
    Item Create Page
@endsection

@section('content')
    <div class=" mt-3 ">

        <form action="{{ route('inventory.store') }}" method="post">
            @csrf
            <div>
                <label for="" class=" form-label">Name</label>
                <input type="text" value="{{old('name')}}" class=" form-control @error('name') is-invalid @enderror" name="name">
                @error('name')
                <div class=" invalid-feedback ">{{$message}}</div>
                    
                @enderror
            </div>
            <div>
                <label for="" class=" form-label">Price</label>
                <input type="number" value="{{old('price')}}" class=" form-control  @error('price') is-invalid @enderror" name="price">
                @error('price')
                <div class=" invalid-feedback ">{{$message}}</div>    
                @enderror
            </div>
            <div>
                <label for="" class=" form-label">Stock</label>
                <input type="number" value="{{old('stock')}}" class=" form-control  @error('stock') is-invalid @enderror " name="stock">
                @error('stock')
                <div class=" invalid-feedback ">{{$message}}</div>     
                @enderror
            </div>
            <button class=" my-3 btn btn-primary ">Create Item</button>
        </form>
    </div>
@endsection
