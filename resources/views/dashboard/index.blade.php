@extends("layouts.master")
@section('title')
Dashboard Page
@endsection

@section('content')
    <h1>I'm Dashboard</h1>
    @if (session("auth"))
        <div class=" alert alert-info">{{session("auth")->name}}</div>
    @endif
@endsection

