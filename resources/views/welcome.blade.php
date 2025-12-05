@extends('layouts.app')

@section('content')
    <h1>Welcome to BookStack</h1>

    @auth
        <p>You are logged in.</p>
    @else
        <p>Please login or register.</p>
    @endauth
@endsection
