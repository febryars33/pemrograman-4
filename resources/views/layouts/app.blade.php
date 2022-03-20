<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<link rel="stylesheet" href="{{ mix('css/app.css') }}">
	<title>{{ config('app.name', 'Laravel') }} - @yield('title')</title>
</head>

<body class="hold-transition sidebar-mini">
	<div class="wrapper">

		@include('partials.navbar')

		@include('partials.main_sidebar')

		@include('partials.content_wrapper')

		@include('partials.control_sidebar')

		@include('partials.footer')
	</div>
	<script src="{{ mix('js/app.js') }}"></script>
</body>

</html>