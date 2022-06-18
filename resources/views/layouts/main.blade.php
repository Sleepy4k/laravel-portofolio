<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
		@include('partials.meta')

		<title>{{ config('app.name', 'Apri') }} | {{ $data[0] }}</title>

		@include('partials.main.css')
	</head>
	<body>
		@include('partials.main.navbar')

		<div class="container mt-4">
			@yield('container')
		</div>

		@include('partials.main.script')
	</body>
</html>