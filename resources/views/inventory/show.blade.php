@extends("layouts.master")
@section('title')
Item Detail Page
@endsection


@section('content')
<div class=" mt-3 md:mt-5">

    <h4>Item Detail</h4>
    
<table class=" table table-bordered table-hover">
    <tr>
        <td>Name</td>
        <td>{{$item->name}}</td>
    </tr>
    <tr>
        <td>Price</td>
        <td>{{$item->price}}</td>
    </tr>
    <tr>
        <td>Stock</td>
        <td>{{$item->stock}}</td>
    </tr>
    <tr>
        <td>Created At</td>
        <td>{{$item->created_at}}</td>
    </tr>
    <tr>
        <td>Updated At</td>
        <td>{{$item->updated_at}}</td>
    </tr>
  
</table>

</div>
@endsection
