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
    <input type="text" name="name" value="{{ old('name') }}"> {{-- validator withInput--}}
    <input type="text" name="email" value="allison@hotmail.com">
    <input type="text" name="password" value="123456">
    <button type="submit">Register</button>
</form> 
@endsection



