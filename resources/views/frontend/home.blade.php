@extends('frontend.layout.app')

@section('title')

Home Page

@endsection

@section('content')

Welcome to Home Page

@guest
    <a href="{{ route('register') }}">Register</a>
    <a href="{{ route('login') }}">Login</a>
@endguest

@auth
    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit">Logout</button>
    </form>
@endauth

@endsection