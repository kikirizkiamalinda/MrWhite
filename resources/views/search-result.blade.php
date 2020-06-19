<!DOCTYPE html>
<html>
<head>
	<title>Mr. White | Search {{ request()->input('search')}}</title>
	<link rel="icon" type="image/png" href="image/logo2.png">
	<link rel="stylesheet" type="text/css" href="{{mix('css/app.css')}}">
</head>
<body>
@include('partials._topbar')
@component('partials._breadcrumb')
	<li class="breadcrumb-item"><a href="/">Home</a></li>
    <li class="breadcrumb-item" aria-current="page">{{ request()->input('search') }}</li>
@endcomponent
@include('component.alert')
<div class="container">
	<div class="">
		<h1> Search Results</h1>
		<p>{{ $result->total() }} result(s) for '{{ request()->input('search')}}'</p>
	</div>
	<div class="row text-center">
		@forelse ($result as $results)
		<div class="col-sm-3">
			<div class="card-deck">
				<div class="card text-dark invinsible ">
					<a href="{{ route('shop.show', $results->barcode) }}"><img src="{{ URL::to('image/',$results->url_gambar) }}" class="image1"></a>
					<div class="middle">
						<p class="card-text">See result Detail</p>
					</div>
					<div class="card-footer invinsible">
						<a href="{{ route('shop.show', $results->barcode) }}">
							{{ ucwords($results->nama) }}
							<p>Rp. {{ $results->presentPrice() }}</p>
						</a>
						{{-- <p>{{ $results->deskripsi }}</p> --}}
					</div>
				</div>
			</div>
		</div>
		@empty
		<div class="card invinsible text-left col-md-12">
			<img src="image/result.jpg" class="image2" style="opacity: 1;">
		    <a href="{{ route('shop.index') }}" class="btn btn-awsm">Back to Shop</a>
		</div>
		@endforelse
	</div>
	<div>
		{{ $result->appends(request()->input())->links() }}
	</div>
</div>
@include('partials._footer')
<script type="text/javascript" src="{{mix('js/app.js')}} "></script>

</body>
</html>