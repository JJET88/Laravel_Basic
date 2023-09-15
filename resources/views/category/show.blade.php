@extends("layouts.master")
@section('title')
Category Detail Page
@endsection


@section('content')
<div class=" mt-3 md:mt-5">

    <h4>Category Detail</h4>
    
<table class=" table table-bordered table-hover">
    <tr>
        <td>Title</td>
        <td>{{$category->title}}</td>
    </tr>
    <tr>
        <td>Description</td>
        <td>{{$category->description}}</td>
    </tr>
    <tr>
        <td>Created At</td>
        <td>{{$category->created_at}}</td>
    </tr>
    <tr>
        <td>Updated At</td>
        <td>{{$category->updated_at}}</td>
    </tr>
  
</table>

</div>
@endsection
