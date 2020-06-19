<section class="py-5">
	@if ($count>0)
	<div class="container">
		<div class="owl-two owl-carousel owl-theme">
			@foreach ($banner as $banners)
				<div class="col-sm-12 col-md-12 item">
					<div class="card invinsible">
						<a href="{{ $banners->url_link }}" target="_blank"><img src="{{ URL::to('image/',$banners->url_gambar) }}" class="image3"></a>
					</div>
				</div>
			@endforeach
		</div>
	</div>
	@else{
		<div>
		</div>
	}
	@endif
		
</section>
