<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Shop Cakes </title>
	<script src="https://unpkg.com/sweetalert2@7.18.0/dist/sweetalert2.all.js"></script>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
	<link rel="stylesheet" title="style" href="{{url('css/AdminIndex.css')}}">
	<link rel="stylesheet" title="style" href="{{url('css/Header.css')}}">
	<link rel="stylesheet" title="style" href="{{url('css/Footer.css')}}">
	<link href="{{url('css/HomePage/style.css')}}" title="style" rel="stylesheet" />
	<link href="{{url('css/HomePage/responsive.css')}}" title="style" rel="stylesheet" />
	<link href="{{url('css/HomePage/index.css')}}" title="style" rel="stylesheet" />
</head>
<body>
	@include ('header')
	<div>
		@yield('content')
	</div>
	{{-- @include ('footer') --}}
	{{-- @include('script') --}}
</body>
</html>