<!DOCTYPE html>
<html lang="en">
    <head>
        @include('partials/meta')

        <title>Apri | Register</title>

        @include('partials/css')
    </head>
    <body class="animsition">
        <div class="page-wrapper">
            <div class="page-content--bge5">
                <div class="container">
                    <div class="login-wrap">
                        <div class="login-content">
                            <div class="login-logo">
                                <a href="{{ route('index') }}">
                                    <img src="{{asset('admin/images/icon/logo.png')}}" alt="CoolAdmin">
                                </a>
                            </div>
                            <div class="login-form">
                                <form action="{{ route('register') }}" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <label>
                                            Name
                                        </label>
                                        <input class="au-input au-input--full" type="text" name="name" placeholder="Benjamin4k">
                                    </div>
                                    <div class="form-group">
                                        <label>
                                            Email Address
                                        </label>
                                        <input class="au-input au-input--full" type="email" name="email" placeholder="example@gmail.com">
                                    </div>
                                    <div class="form-group">
                                        <label>
                                            Password
                                        </label>
                                        <input class="au-input au-input--full" type="password" name="password" placeholder="*******">
                                    </div>
                                    <div class="form-group">
                                        <label>
                                            Password Confirmation
                                        </label>
                                        <input class="au-input au-input--full" type="password" name="password_confirmation" placeholder="*******">
                                    </div>
                                    <div class="login-checkbox">
                                        <label>
                                            <input type="checkbox" name="aggree">
                                                Agree the terms and policy
                                            </input>
                                        </label>
                                    </div>
                                    <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">
                                        register
                                    </button>
                                </form>
                                <div class="register-link">
                                    <p>
                                        Already have account?
                                        <a href="{{ route('login') }}">
                                            Sign In
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('partials/script')
    </body>
</html>