<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Laravel</title>
	<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
	<link href="/css/app.css" rel="stylesheet">
	<script src="/js/app.js"></script>
</head>
<body>
	<article>
		@include('template.header')
		<div id="app">
			@yield('content')
		</div>
	</article>
</body>
</html>
