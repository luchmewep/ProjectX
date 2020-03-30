<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	@include('partials.head')
</head>
<body>
	@include('partials.header')
	<main class="pt-5 mt-5 pb-5 mb-5">
		@yield('content')
	</main>
	@include('partials.footer')
	@include('partials.scripts')
</body>
</html>
