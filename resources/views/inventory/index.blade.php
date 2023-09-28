@extends("layouts.master")
@section('title')
Item List Page
@endsection


@section('content')
<div class=" mt-3 md:mt-5">

    <h4>Item List</h4>
    
<table class=" table table-bordered table-hover">
    <thead>
        <tr>
            <td>#</td>
            <td>Name</td>
            <td>Price</td>
            <td>Stock</td>
            <td>Control</td>
        </tr>
    </thead>
    <tbody>
        @forelse ($items as $item)
        <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->name}}</td>
            <td>{{$item->price}}</td>
            <td>{{$item->stock}}</td>
            <td>
                <a class="btn btn-sm btn-outline-primary" href="{{route("inventory.show",$item->id)}}">Detail</a>
                <form class=" d-inline-block" action="{{route("inventory.destroy",$item->id)}}" method="post">
                    @method('delete')
                    @csrf
                    <button class=" btn btn-sm btn-outline-danger">Delete</button>
                </form>
                <a class=" btn btn-sm btn-outline-info" href="{{route("inventory.edit",$item->id)}}">Edit</a>
            </td>

        </tr>
        @empty
        <tr>
            <td colspan="4" class=" text-center ">
                There is no record <br>
                <a class=" btn btn-sm btn-primary" href="{{route('inventory.create')}}"> Create Item</a>
            </td>
        </tr>
        
        @endforelse
    </tbody>
</table>
{{$items->onEachSide(1)->links()}}
</div>
@endsection
