@extends('master')

@section('content')
    <h2>Users</h2>
    <ul>
        @foreach ($users as $user)
        <li> {{$user->name}}</li> | <a href=" {{route ('users.edit', ['user' => $user->id]) }} ">Edit | <a href=" {{ route('users.destroy', ['user' => $user->id])}} ">Delet</a>
        @endforeach
    </ul>
@endsection()