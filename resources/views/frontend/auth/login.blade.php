@extends('frontend.layout.app')

@section('title')

Login

@endsection

@section('content')

<h2>Login</h2>

@if ($errors->any())
    <div style="color: red;">
        {{ $errors->first() }}
    </div>
@endif

<form method="POST" action="{{ route('authenticate') }}">
    @csrf
    <label>Email:</label>
    <input type="email" name="email" value="{{ old('email') }}"><br><br>

    <label>Password:</label>
    <input type="password" name="password"><br><br>

    <button type="submit">Login</button>
</form>

<a href="{{ route('register') }}">Register</a>

@endsection