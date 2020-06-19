<!DOCTYPE html>
<html>
<head>
	<title>Mr. White | {{ ucwords($category_name) }}</title>
	<link rel="icon" type="image/png" href="image/logo2.png">
	<link rel="stylesheet" type="text/css" href="{{mix('css/app.css')}}">
</head>
<body>
@include('partials._topbar')

@component('partials._breadcrumb')
	<li class="breadcrumb-item"><a href="/">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page"><a href="{{ route('shop.index') }}">Shop</a></li>
@endcomponent

@include('component.alert')

<div class="products-section container">
	@include('partials._sidebar')
	<div>
		<div class="products-header">
			<h1> {{ ucwords($category_name) }}</h1>
			<div class="dropdown d-none d-sm-block d-md-block">
				<a href="#" class="dropdown-toggle label-sort" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><strong>Sort By: {{ request()->sort }}</strong></a>
				<ul class="dropdown-menu">
					<li><a href="{{ route('shop.index',['category'=>request()->category, 'sort'=> 'Low to High']) }}">Low to High</a></li>
					<li><a href="{{ route('shop.index',['category'=>request()->category, 'sort'=> 'High to Low']) }}">High to low</a></li>
					<li><a href="{{ route('shop.index',['category'=>request()->category, 'sort'=> 'A to Z']) }}">Name A - Z</a></li>
					<li><a href="{{ route('shop.index',['category'=>request()->category, 'sort'=> 'Z to A']) }}">Name Z - A</a></li>
				</ul>
			</div>
		</div>
		<div class="products text-center ">
			@forelse($product as $products)
				<div class="product col-xs col-sm col-md d-block card invinsible">
					<a href="{{ route('shop.show', $products->barcode) }}"><img src="{{ URL::to('image/',$products->url_gambar) }}" class="image1"></a>
					<div class="card-footer invinsible">
						<a href="{{ route('shop.show', $products->barcode) }}">
							<h5>{{ ucwords($products->nama) }}</h5>
							<h6>Rp. {{ number_format($products->harga, 0, '', '.') }}</h6>
						</a>
					</div>
				</div>
			@empty
			<div class="text-center">No Item Found</div>
			@endforelse

		</div>
		<div class="d-flex justify-content-center text-center py-5">
			{{ $product->appends(request()->input())->links() }}
		</div>
	</div>

	
</div>
{{-- @include('component.product-list-card') --}}
@include('partials._footer')
<script type="text/javascript" src="{{mix('js/app.js')}} "></script>

</body>
</html>