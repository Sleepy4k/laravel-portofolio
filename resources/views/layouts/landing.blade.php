<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @includeIf('partials.head.meta')

        <title>{{ basename(request()->path()) ? (basename(request()->path())." | ".config("app.name")) : config("app.name")}}</title>

        @includeIf('partials.head.icon')

        @includeIf('partials.head.landing.css')
    </head>
    <body>
        @hasSection('main-content')
            @yield('main-content')
        @endif

        @includeIf('partials.script.landing.main')
    </body>
</html>
