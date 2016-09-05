<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
		<title>buat crud materialize</title>
		<link rel="stylesheet" href="{{asset('materialize/css/materialize.min.css')}}">
		<link rel="stylesheet"  href="{{asset('style.css')}}">
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
		@section('css')
		@show
	</head>
	<body>
		
		@section ('header')
		@include ('layouts.header')
		@show
		<!-- preloader !-->
		<div class="loading"></div>
		<!-- preloader !-->
		<div class="container">
			@yield ('content')
		</div>
		
		<script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
		<script src="{{asset('materialize/js/materialize.min.js')}}" type="text/javascript" charset="utf-8" async defer></script>
		<script type="text/javascript" charset="utf-8" async defer>
		(function($) {
			$(function () {
				$('.button-collapse').sideNav();
			});
			})	;

		//preloader js
		$(window).load(function() {
		$(".loading").fadeOut("slow");;
		});
		//preloader end
		</script>

		@section ('footer')
		@include ('layouts.footer')
		@show
	</body>
</html>