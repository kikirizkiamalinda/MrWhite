<!DOCTYPE html>
<html>
<head>
	<title>Mr. White | Landing Page</title>
	<link rel="icon" type="image/png" href="image/logo2.png">
	<link rel="stylesheet" type="text/css" href="{{mix('css/app.css')}}">
</head>
<body>
	@include('component.hero')
	@foreach ($setting as $settings)
	@include("component." . $settings['isi'])
	@endforeach

{{-- @include('component.category-list')
@include('component.brand-category')
@include('component.sale-product')
@include('component.banner')
@include('component.product-catalog') --}}
@include('partials._footer')

<script type="text/javascript" src="{{mix('js/app.js')}} "></script>
</body>
</html>
