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
                <input type="text" value="{{old("title")}}" class=" form-control @error("title") is-invalid @enderror" name="title">
                @error('title')
                    
                <div class=" invalid-feedback">{{$message}}</div>
                @enderror
            </div>
            <div>
                <label for="" class=" form-label">Description</label>
                <textarea  value="" class=" form-control  @error("description") is-invalid @enderror" name="description" rows="5">{{old("description")}}</textarea>
                @error('description')
                    
                <div class=" invalid-feedback">{{$message}}</div>
                @enderror
            </div>
         
            <button class=" my-3 btn btn-primary ">Create Category</button>
        </form>
    </div>
@endsection
