<div class="bg-faded py-5">
	<div class="container">
		<div class="row">
			<div class="centeredmenu border-awsm">
				<h1>Our Product</h1>
				<ul class="list-inline ">
				  {{-- <li class="list-inline-item"><a href="#">Pomade</a></li> --}}
				  {{-- <li class="list-inline-item"><a href="#">Shave Gel</a></li>
				  <li class="list-inline-item"><a href="#">Perfume</a></li> --}}
				</ul>
			</div>
		</div>
		<div class="row">
			@foreach($product as $products)
			<div class="col-sm-3">
				<div class="card-deck">

					<div class="card text-dark invinsible ">
						<a href="{{ route('shop.show', $products->barcode) }}"><img src="{{ URL::to('image/', $products->url_gambar) }}" class="image1"></a>
						<div class="middle">
							<p class="card-text">{{ $products->deskripsi }}</p>
						</div>
						<div class="card-footer text-white bg-transparent text-center">
							<a href="{{ route('shop.show', $products->barcode) }}">
								<h4>{{ ucwords($products->nama) }}</h4>
								<h6>Rp. {{ $products->presentPrice() }}</h6>
							</a>
						</div>
					</div>
				</div>
			</div>
			@endforeach
		</div>
		<div class="text-center">
		    <a href="{{ route('shop.index') }}" class="btn btn-awsm">View more</a>
		</div>
	</div>
</div>
