@extends("layouts.master")
@section('title')
Item Create Page
@endsection

@section('content')
<form action="{{route("item.store")}}" method="post" >
    @csrf
    <div>
        <label for="" class=" form-label">Name</label>
        <input type="text" class=" form-control" name="name">
    </div>
    <div>
        <label for="" class=" form-label">Price</label>
        <input type="number" class=" form-control" name="price">
    </div>
    <div>
        <label for="" class=" form-label">Stock</label>
        <input type="number" class=" form-control" name="stock">
    </div>
    <button class=" my-3 btn btn-primary ">Create Item</button>
</form>
@endsection
