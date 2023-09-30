@extends("layouts.master")
@section('title')
Register Page
@endsection

@section('content')
    <h1>I'm Register</h1>
    <form action="{{ route("auth.store") }}" method="post">
        @csrf
        <div>
            <label for="" class=" form-label">Name</label>
            <input type="text" value="{{old("name")}}" class=" form-control @error("name") is-invalid @enderror" name="name">
            @error('name')
                
            <div class=" invalid-feedback">{{$message}}</div>
            @enderror
        </div>
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
        <div>
            <label for="" class=" form-label">Password Confirmation</label>
            <input type="password" value="{{old("password_confirmation")}}" class=" form-control @error("password_confirmation") is-invalid @enderror" name="password_confirmation">
            @error('password_confirmation')
                
            <div class=" invalid-feedback">{{$message}}</div>
            @enderror
        </div>
     
     
        <button class=" my-3 btn btn-primary ">Register</button>
    </form>

@endsection

