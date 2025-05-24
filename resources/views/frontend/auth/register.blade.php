@extends('frontend.layout.app')

@section('title')

Register

@endsection

@section('content')

<h2>Register</h2>

@if ($errors->any())
    <div style="color: red;">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="POST" action="{{ route('register.store') }}">
    @csrf
    <label>Name:</label>
    <input type="text" name="name" value="{{ old('name') }}"><br><br>

    <label>Email:</label>
    <input type="email" name="email" value="{{ old('email') }}"><br><br>

    <label>Password:</label>
    <input type="password" name="password"><br><br>

    <label>Confirm Password:</label>
    <input type="password" name="password_confirmation"><br><br>

    <button type="submit">Register</button>
</form>

<a href="{{ route('login') }}">Login</a>

@endsection