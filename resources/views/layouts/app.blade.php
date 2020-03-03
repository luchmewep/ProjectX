<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	@include('partials.head')
</head>
<body>
	@include('partials.header')
	<main class="py-4">
		@yield('content')
	</main>
	@include('partials.footer')
	@include('partials.scripts')
</body>
</html>
