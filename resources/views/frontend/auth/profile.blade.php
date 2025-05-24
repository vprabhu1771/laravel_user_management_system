@extends('frontend.layout.app')

@section('title')

Profile

@endsection

@section('content')

<h2>Welcome, {{ Auth::user()->name }}</h2>

<p>Email: {{ Auth::user()->email }}</p>

<form method="POST" action="{{ route('logout') }}">
    @csrf
    <button type="submit">Logout</button>
</form>

@endsection