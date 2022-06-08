@extends('layouts.auth')

@section('title', 'Register')

@section('body')
    <div class="login-logo">
        <a href="{{ route('index') }}">
            <img src="{{asset('admin/images/icon/logo.png')}}" alt="CoolAdmin">
        </a>
    </div>
    <div class="login-form">
        @include('partials.auth.form.register')
        <div class="register-link">
            <p>
                Already have account?
                <a href="{{ route('login') }}">
                    Sign In
                </a>
            </p>
        </div>
    </div>
@endsection