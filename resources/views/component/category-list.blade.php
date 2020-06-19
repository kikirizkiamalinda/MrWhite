<section class="py-5">
	<div class="bg-faded py-5">
		<div class="container">
			<div class="row">
				<div class="centeredmenu border-awsm">
					<h1>Some Category</h1>
				</div>
			</div>
			<div class="row">
				<div class="col-12">
					<div class="card-group">
						@foreach ($category as $categories)
						<div class="card invinsible text-dark col-6 col-md">
							<a href="{{ route('shop.index', ['category'=>$categories->name]) }}"><img src="/image/{{ $categories->name }}.jpg" class="image4"></a>
							<div class="middle2">
								<h2>{{ ucwords($categories->name) }}</h2>
							</div>
						</div>
						@endforeach
					</div>
				</div>
			</div>
		</div>
	</div>
</section>