@extends("layouts.master")
@section('title')
Category List Page
@endsection


@section('content')
<div class=" mt-3 md:mt-5">

    <h4>Category List</h4>
    
<table class=" table table-bordered table-hover">
    <thead>
        <tr>
            <td>#</td>
            <td>Title</td>
            <td>Description</td>
            <td>Control</td>
        </tr>
    </thead>
    <tbody>
        @forelse ($category as $item)
        <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->title}}</td>
            <td>{{$item->description}}</td>
            <td>
                <a class="btn btn-sm btn-outline-primary" href="{{route("category.show",$item->id)}}">Detail</a>
                <form class=" d-inline-block" action="{{route("category.destroy",$item->id)}}" method="post">
                    @method('delete')
                    @csrf
                    <button class=" btn btn-sm btn-outline-danger">Delete</button>
                </form>
                <a class=" btn btn-sm btn-outline-info" href="{{route("category.edit",$item->id)}}">Edit</a>
            </td>

        </tr>
        @empty
        <tr>
            <td colspan="4" class=" text-center ">
                There is no record <br>
                <a class=" btn btn-sm btn-primary" href="{{route('category.create')}}"> Create Category</a>
            </td>
        </tr>
        
        @endforelse
    </tbody>
</table>

</div>
@endsection
