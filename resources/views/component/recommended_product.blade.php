<div class="bg-faded py-5">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h3>You Might Like ...</h3><br>
				<div class="card-deck">
					@foreach ($product as $products)
					<div class="card invinsible mb-3">
						<a href="{{ route('shop.show', $products->barcode) }}"><img src="{{ URL::to('image/', $products->url_gambar) }}" class="image2"></a>
						<div class="card-footer bg-transparent text-center">
							<a href="{{ route('shop.show', $products->barcode) }}">
								<p>{{ ucwords($products->nama) }}</p>
								<p>Rp. {{ $products->presentPrice() }}</p>
							</a>
						</div>
					</div>
					@endforeach
				</div>
			</div>
		</div>
	</div>
</div>
