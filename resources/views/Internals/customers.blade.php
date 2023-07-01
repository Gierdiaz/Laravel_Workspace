@extends('master')

@section('content')
<style>
    li {
        list-style-type: none;
        
    }

</style>

<h1>Customers</h1>

<ul>
    @foreach ($customers as $key => $customer) 
        <li>{{ $customer }}</li>
    @endforeach
</ul>
@endsection
