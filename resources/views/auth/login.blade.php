<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags-->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="au theme template">
        <meta name="author" content="Hau Nguyen">
        <meta name="keywords" content="au theme template">

        <!-- Title Page-->
        <title>Login</title>

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
                                        <label>Email Address</label>
                                        <input class="au-input au-input--full" type="email" name="email" placeholder="Email">
                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input class="au-input au-input--full" type="password" name="password" placeholder="Password">
                                    </div>
                                    <div class="login-checkbox">
                                        <label>
                                            <input type="checkbox" name="remember">Remember Me
                                        </label>
                                        <label>
                                            <a href="#">Forgotten Password?</a>
                                        </label>
                                    </div>
                                    <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">sign in</button>
                                    <div class="social-login-content">
                                        <div class="social-button">
                                            <button class="au-btn au-btn--block au-btn--blue m-b-20">sign in with facebook</button>
                                            <button class="au-btn au-btn--block au-btn--blue2">sign in with twitter</button>
                                        </div>
                                    </div>
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