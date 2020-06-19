<!DOCTYPE html>
<html>
<head>
	<title>Mr. White | {{ ucwords($product_detail->nama) }}</title>
	<link rel="stylesheet" type="text/css" href="{{mix('css/app.css')}}">
</head>
<body>
	@include('partials._topbar')
	@component('partials._breadcrumb')
		<li class="breadcrumb-item"><a href="/">Home</a></li>
	    <li class="breadcrumb-item active" aria-current="page"><a href="{{ route('shop.index') }}">Shop</a></li>
	    <li class="breadcrumb-item">{{ ucwords($product_detail->nama) }}</li>
	@endcomponent
	@include('component.alert')
	<div class="bg-faded pt-5">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="card-deck">

						<div class="card border-light mb-3 col-6">
							<a href="#"><img src="{{ URL::to('image/',$product_detail->url_gambar) }}" class="image1"></a>
						</div>

						<div class="card mb-3 col-6 invinsible font-detail">
						<div class="card-header bg-transparent">
							<h1>{{ ucwords($product_detail->nama) }}</h1>
						</div>
						<div class="card-body">
							{{-- <h3>{{ $product_detail->barcode }}</h3> --}}
							<p>{{ $product_detail->deskripsi }}</p>
						</div>
						<div class="card-footer bg-transparent">
							<h3>Rp. {{ $product_detail->presentPrice() }}</h3>
						</div>
						@if ($count_link >0)
							@foreach ($link as $links)
								<p><a href="{{ $links->link }}" class="btn btn-awsm" target="_blank">Beli di {{ ucwords($links->tag) }}</a></p>
							@endforeach
						@else
							<div>
							</div>
						@endif
					</div>

				</div>
			</div>
		</div>
	</div>
	@include('component.recommended_product')
	@include('partials._footer')
	<script type="text/javascript" src="{{mix('js/app.js')}} "></script>
</body>
</html>
