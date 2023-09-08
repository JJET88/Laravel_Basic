@extends('master')

@section('title')
    Home page
@endsection

@section('home')
    <div class=" p-3">

        <h1>I'm home page.</h1> 
        <h1>{{"<script> alert('hello')</script>"}}</h1>  
        <h2>{{$data}}</h2> 
    </div>
@endsection