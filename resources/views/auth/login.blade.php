@extends('layouts.master')


@section('content')
    
<form method="POST" action="{{ url('/auth/login')}}">
    {!! csrf_field() !!}

    @include('errors.formError')

    <div>
        Email
        <input type="email" name="email" value="{{ old('email') }}">
    </div>

    <div>
        Password
        <input type="password" name="password" id="password">
    </div>

    <div>
        <input type="checkbox" name="remember"> Remember Me
    </div>

    <div>
        <button type="submit">Login</button>
    </div>
</form>

@endsection