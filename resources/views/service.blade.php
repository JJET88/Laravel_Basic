@extends('master')

@section('title')
    Service page
@endsection

@section('home')
    <div class=" p-3">

        <h1>I'm service page.</h1>   
        <h2>Services are {{$services}}</h2> 
    </div>
<script>
    if(confirm(Do you agree?)){
        alert("YEAH! you agree it")
    }else{
        alert("No! you disagree it")
    }
</script>
@include('footer')   


@endsection
