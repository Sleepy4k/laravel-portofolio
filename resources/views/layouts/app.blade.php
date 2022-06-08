<!DOCTYPE html>
<html lang="en">
    <head>
        @include('partials.meta')

        <title>Apri | Dashboard</title>

        @include('partials.app.css')
    </head>
    <body class="animsition">
        <div class="page-wrapper">
            @include('partials.app.header-mobile')

            @include('partials.app.sidebar')

            <div class="page-container">
                @include('partials.app.header')

                @yield('content')
            </div>
        </div>
        @include('partials.app.script')
    </body>
</html>