@extends('layouts.master')
@section('title')
    Category Edit Page
@endsection

@section('content')
    <div class=" mt-3 ">

        <form action="{{ route('category.update', $category->id) }}" method="post">
            @method('put')
            @csrf
            <div>
                <label for="" class=" form-label">Title</label>
                <input type="text" value="{{ old("title", $category->title) }}"
                    class=" form-control @error('title')
                    is-invalid
                @enderror"
                    name="title">
                @error('title')
                    <div class=" invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label for="" class=" form-label">Description</label>
                <textarea name="description" class=" @error('description')
                    is-invalid
                @enderror"
                    rows="10">{{ old("description",$category->description) }}</textarea>
                @error('description')
                    <div class=" invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <button class=" my-3 btn btn-primary ">Update Category</button>
        </form>
    </div>
@endsection
