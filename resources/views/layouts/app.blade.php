<!DOCTYPE html>
<html lang="en">
    <head>
        @include('partials/meta')

        <title>Apri | Dashboard</title>

        @include('partials/css')
    </head>
    <body class="animsition">
        <div class="page-wrapper">
            @include('partials/header-mobile')

            @include('partials/sidebar')

            <div class="page-container">
                @include('partials/header')

                @yield('content')
            </div>
        </div>
        @include('partials/script')
    </body>
</html>