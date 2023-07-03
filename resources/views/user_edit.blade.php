@extends('master')

@if (session()->has('message'))
        {{ session()->get('message') }}
@endif

@section('content')
    <form action=" {{ route('users.update', ['user' => $user->id]) }}" method="POST">
        @csrf
        <input type="hidden" name="_method" value="PUT">    
        <input type="text" name="name" value=" {{ $user->firstName }}">
        <input type="text" name="email" value=" {{ $user->email }}">
        <button type="submit">Update</button>
    </form>
@endsection