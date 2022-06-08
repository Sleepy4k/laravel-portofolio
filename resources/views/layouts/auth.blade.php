<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('partials.meta')

        <title>Apri | @yield('title')</title>

        @include('partials.auth.css')
    </head>
    <body class="animsition">
        <div class="page-wrapper">
            <div class="page-content--bge5">
                <div class="container">
                    <div class="login-wrap">
                        <div class="login-content">
                            @yield('body')
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('partials.auth.script')
    </body>
</html>