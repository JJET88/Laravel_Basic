@extends('layouts.master')
@section('title')
    Category List Page
@endsection


@section('content')
    <div class=" mt-3 md:mt-5">

        <h4>Category List</h4>

        <table class=" table table-bordered table-hover">

            <div class=" d-flex justify-content-between align-items-center">
                <div>

                    <a class=" btn btn-sm btn-primary" href="{{ route('category.create') }}"> Create </a>
                </div>
                <div>

                    <form action="{{route('category.index')}}" method="get">
                        <div class=" input-group">

                            <input  
                            @if (request()->has("keyword"))
                                value='{{request()->keyword}}'
                            @endif
                            type="text" name="keyword"  class=" form-control" placeholder="Search...">
                            @if (request()->has("keyword"))
                                <a href="{{route("category.index")}} " class="btn" ><i class=" bi bi-x"></i></a>
                            @endif
                            <button class="btn btn-primary">Search</button>
                        </div>
                    </form>
                </div>

            </div>
            <thead>
                <tr>
                    <td>#</td>
                    <td>Title</td>
                    <td>Description</td>
                    <td>Control</td>
                </tr>
            </thead>
            <tbody>
                @forelse ($categories as $category)
                    <tr>
                        <td>{{ $category->id }}</td>
                        <td>{{ $category->title }}</td>
                        <td>{{ $category->description }}</td>
                        <td>
                            <a class="btn btn-sm btn-outline-primary"
                                href="{{ route('category.show', $category->id) }}">Detail</a>
                            <form class=" d-inline-block" action="{{ route('category.destroy', $category->id) }}"
                                method="post">
                                @csrf
                                @method('DELETE')
                                <button class=" btn btn-sm btn-outline-danger">Delete</button>
                            </form>
                            <a class=" btn btn-sm btn-outline-info"
                                href="{{ route('category.edit', $category->id) }}">Edit</a>
                        </td>

                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class=" text-center ">
                            There is no record <br>
                            <a class=" btn btn-sm btn-primary" href="{{ route('category.create') }}"> Create Category</a>
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>

        {{ $categories->onEachSide(1)->links() }}
    </div>
@endsection
