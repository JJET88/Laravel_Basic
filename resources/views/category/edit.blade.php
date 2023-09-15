@extends('layouts.master')
@section('title')
    Category Edit Page
@endsection

@section('content')
    <div class=" mt-3 ">

        <form action="{{ route('category.update',$category->id) }}" method="post">
            @method("put")
            @csrf
            <div>
                <label for="" class=" form-label">Title</label>
                <input type="text" value="{{$category->title}}" class=" form-control" name="title">
            </div>
            <div>
                <label for="" class=" form-label">Description</label>
                <textarea  name="description" rows="10">{{$category->description}}</textarea>
            </div>
         
            <button class=" my-3 btn btn-primary ">Update Category</button>
        </form>
    </div>
@endsection
