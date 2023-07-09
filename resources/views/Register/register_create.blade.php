@extends('master')
@section('content')

<!-- /resources/views/post/create.blade.php -->
 
<h1>Create Post</h1>
 
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
 
<!-- Create Post Form -->

<h1>Register</h1>
<form action="{{ route('register.store') }}" method="post">
    @csrf
    <label for="">Name</label>
    <br>
    <input type="text" name="name" value="{{ old('name') }}"> {{-- validator withInput--}}
    <br>
    <label for="">E-mail</label>
    <br>
    <input type="text" name="email" value="{{ old('email') }}">
    <br>
    <label for="">Password</label>
    <br>
    <input type="text" name="password" value="{{ old('password') }}">
    <br>
    <label for="">Confirm password</label>
    <br>
    <input type="text" name="password_confirmation" value="{{ old('password') }}">
    <br>
    <button type="submit">Register</button>
    
</form> 
@endsection



