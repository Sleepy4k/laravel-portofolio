<!DOCTYPE html>
<html lang="en">
    <head>
        @include('partials/meta')

        <title>Apri | Login</title>

        @include('partials/css')
    </head>
    <body class="animsition">
        <div class="page-wrapper">
            <div class="page-content--bge5">
                <div class="container">
                    <div class="login-wrap">
                        <div class="login-content">
                            <div class="login-logo">
                                <a href="#">
                                    <img src="{{asset('admin/images/icon/logo.png')}}" alt="CoolAdmin">
                                </a>
                            </div>
                            <div class="login-form">
                                <form action="{{ route('login') }}" method="post">
                                    @csrf
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
                                        <input class="au-input au-input--full" type="password" name="password" placeholder="******">
                                    </div>
                                    <div class="login-checkbox">
                                        <label>
                                            <input type="checkbox" name="remember">Remember Me
                                        </label>
                                    </div>
                                    <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">
                                        sign in
                                    </button>
                                </form>
                                <div class="register-link">
                                    <p>
                                        Don't you have account?
                                        <a href="{{route('register') }}">Sign Up Here</a>
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