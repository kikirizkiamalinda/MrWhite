<section class="py-5">
<div class="bg-faded py-2">
	<div class="container">
		<div class="row">
			<div class="centeredmenu sale border-awsm">
				<h1>Best Offer</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<div class="card-group">
					
					@foreach($offer as $offers)
					<div class="card invinsible text-dark col-md col-sm col-xs-6">
						<a href="{{ route('shop.show', $offers->barcode) }}"><img src="{{ URL::to('image/',$offers->url_gambar) }}" class="image1"></a>
						<div class="middle">
							<p>{{ $offers->deskripsi }}</p>
						</div>
						<div class="card-footer text-white text-center bg-transparent" {{-- style="background-color: #EF4836; " --}}>
							<a href="{{ route('shop.show', $offers->barcode) }}">
								<strong><h4>{{ ucwords($offers->nama) }}</h4></strong>
								<h6>Rp. {{ $offers->presentPrice() }}</h6>
							</a>
						</div>
					</div>
					@endforeach

				</div>
			</div>
		</div>
	</div>
</div>
</section>