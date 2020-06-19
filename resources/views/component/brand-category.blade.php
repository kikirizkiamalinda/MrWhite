<section class="bg-faded py-5">
	<div class="container">
		<div class="row">
			<div class="centeredmenu border-awsm">
				<h1>Top Brand</h1>
			</div>
		</div>
		<div class="owl-one owl-carousel owl-theme">
			@foreach ($brand as $brands)
			<div class="item">
				<a href="{{ route('shop.index', ['brands'=>$brands->name]) }}"><img src="/image/{{ $brands->name }}.jpeg" class="image1"></a>
			</div>
			@endforeach
		</div>
	</div>
</section>