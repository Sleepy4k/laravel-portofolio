@extends('layouts.auth')

@section('title', 'Login')

@section('body')
    <div class="login-logo">
        <a href="#">
            <img src="{{asset('admin/images/icon/logo.png')}}" alt="CoolAdmin">
        </a>
    </div>
    <div class="login-form">
        @include('partials.auth.form.login')
        <div class="register-link">
            <p>
                Don't you have account?
                <a href="{{route('register') }}">Sign Up Here</a>
            </p>
        </div>
    </div>
@endsection