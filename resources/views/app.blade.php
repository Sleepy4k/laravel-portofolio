<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">

        <meta name="author" content="@isset($application->meta_author) {{ $application->meta_author }} @else {{ config("meta.author") }} @endisset">
        <meta name="keywords" content="@isset($application->meta_keywords) {{ $application->meta_keywords }} @else {{ config("meta.keyword") }} @endisset">
        <meta name="description" content="@isset($application->meta_description) {{ $application->meta_description }} @else {{ config("meta.description") }} @endisset">

        <meta property="og:site_name" content="@isset($application->app_name) {{ $application->app_name }} @else {{ config("app.name") }} @endisset">
        <meta property="og:title" content="@isset($application->app_name) {{ $application->app_name }} @else {{ config("app.name") }} @endisset">
        <meta property="og:description" content="@isset($application->meta_description) {{ $application->meta_description }} @else {{ config("meta.description") }} @endisset">
        <meta property="og:type" content="website">
        <meta property="og:locale" content="{{ str_replace('_', '-', app()->getLocale()) }}">
        <meta property="og:url" content="{{ config('app.url') }}">
        <meta property="og:image" content="@isset($application->app_icon) @empty(file_exists(public_path('storage/images/'.$application->app_icon))) {{ asset('images/favicon.png') }} @else {{ asset('storage/images/'.$application->app_icon) }} @endempty @else {{ asset('images/favicon.png') }} @endisset">
        <meta property="og:image:width" content="1200">
        <meta property="og:image:height" content="630">
        <meta property="og:image:alt" content="@isset($application->meta_description) {{ $application->meta_description }} @else {{ config("meta.description") }} @endisset">

        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="@isset($application->app_name) {{ $application->app_name }} @else {{ config("app.name") }} @endisset">
        <meta name="twitter:image" content="@isset($application->app_icon) @empty(file_exists(public_path('storage/images/'.$application->app_icon))) {{ asset('images/favicon.png') }} @else {{ asset('storage/images/'.$application->app_icon) }} @endempty @else {{ asset('images/favicon.png') }} @endisset">

        <title inertia>@isset($application->app_name) {{ $application->app_name }} @else {{ config("app.name") }} @endisset</title>

        @isset($application->app_icon)
            @empty(file_exists(public_path('storage/images/'.$application->app_icon)))
                <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/favicon.png') }}">
            @else
                <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('storage/images/'.$application->app_icon) }}">
            @endempty
        @else
            <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/favicon.png') }}">
        @endisset

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">

        <!-- Scripts -->
        @routes
        @viteReactRefresh
        @vite(['resources/js/app.jsx', "resources/js/Pages/{$page['component']}.jsx"])
        @inertiaHead
    </head>
    <body class="font-sans antialiased">
        @inertia

        <!-- Scripts -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script type="text/javascript" src="{{ asset('js/translate.js') }}"></script>
    </body>
</html>