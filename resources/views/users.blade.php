@extends('master')

@section('content')

    <a href="{{ route('users.create')}}">CREATE</a>
    <hr>
    <h2>Users</h2>
    <ul>
        @foreach ($users as $user)
        <li> {{$user->firstName}}</li> | <a href=" {{route ('users.edit', ['user' => $user->id]) }} ">Edit | <a href=" {{ route('users.destroy', ['user' => $user->id])}} ">Delet</a>
        @endforeach
    </ul>
@endsection()