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
        <title>Dashboard</title>

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