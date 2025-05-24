@extends('frontend.layout.app')

@section('title')

Admin Dashboard

@endsection

@section('content')

Welcome to Admin Dashboard

<a href="/users">Users</a>

<form method="POST" action="{{ route('logout') }}">
    @csrf
    <button type="submit">Logout</button>
</form>

@endsection