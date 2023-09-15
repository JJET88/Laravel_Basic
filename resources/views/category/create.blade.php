@extends('layouts.master')
@section('title')
    Category Create Page
@endsection

@section('content')
    <div class=" mt-3 ">

        <form action="{{ route('category.store') }}" method="post">
            @csrf
            <div>
                <label for="" class=" form-label">Title</label>
                <input type="text" class=" form-control" name="title">
            </div>
            <div>
                <label for="" class=" form-label">Description</label>
                <textarea class=" form-control" name="description" rows="5"></textarea>
            </div>
         
            <button class=" my-3 btn btn-primary ">Create Category</button>
        </form>
    </div>
@endsection
