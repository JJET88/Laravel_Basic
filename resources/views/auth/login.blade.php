@extends("layouts.master")
@section('title')
Login Page
@endsection

@section('content')
    <h1>I'm Login</h1>
    @if (session("message"))
        <div class=" alert alert-info">{{session("message")}}</div>
    @endif
    <form action="{{ route("auth.check") }}" method="post">
        @csrf
      
        <div>
            <label for="" class=" form-label">Email</label>
            <input type="email" value="{{old("email")}}" class=" form-control @error("email") is-invalid @enderror" name="email">
            @error('email')
                
            <div class=" invalid-feedback">{{$message}}</div>
            @enderror
        </div>
        <div>
            <label for="" class=" form-label">Password</label>
            <input type="password" value="{{old("password")}}" class=" form-control @error("password") is-invalid @enderror" name="password">
            @error('password')
                
            <div class=" invalid-feedback">{{$message}}</div>
            @enderror
        </div>
        <button class=" my-3 btn btn-primary ">Login</button>
    </form>
@endsection

