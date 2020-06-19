{{-- <div class="sidebar d-none d-xs-none d-sm-none d-md-block d-lg-block">
	<h3>By Category</h3>
	<ul class="pl-0">
		<li>
			<a href="{{ route('shop.index')}}">All Product</a>
		</li>

		<h5>Hair</h5>
		<a href="{{ route('shop.index', ['category'=>'Hair']) }}">All <strong>Hair</strong> Product</a>
		<div class="dropdown-container">
		</div>
		<button class="dropdown-btn dropdown-toggle">Brand</button>
		<div class="dropdown-container {{ set_show('shop.index') }}">
			@foreach ($brand_hair as $brands)
			<li class="{{ active(route('shop.index', ['brands'=>$brands->name])) }}">
				<a href="{{ route('shop.index', ['brands'=>$brands->name]) }}">{{ ucwords($brands->name) }}</a>
			</li>
			@endforeach
		</div>

		<button class="dropdown-btn dropdown-toggle">Substance</button>
		<div class="dropdown-container">
			@foreach ($sub_hair as $substance)
			<li class="{{ active(route('shop.index', ['substance'=>$substance->name])) }}">
				<a href="{{ route('shop.index', ['substance'=>$substance->name]) }}">{{ ucwords($substance->name) }}</a>
			</li>
			@endforeach
		</div>


		<h5>Face</h5>
		<a href="{{ route('shop.index', ['category'=>'Face']) }}">All <strong>Face</strong> Product</a>
		<div class="dropdown-container">
		</div>
		<button class="dropdown-btn dropdown-toggle">Brand</button>
		<div class="dropdown-container">
			@foreach ($brand_face as $brands)
			<li class="{{ active(route('shop.index', ['brands'=>$brands->name])) }}">
				<a href="{{ route('shop.index', ['brands'=>$brands->name]) }}">{{ ucwords($brands->name) }}</a>
			</li>
			@endforeach
		</div>
		<button class="dropdown-btn dropdown-toggle">Substance</button>
		<div class="dropdown-container">
			@foreach ($sub_face as $substance)
			<li class="{{ active(route('shop.index', ['substance'=>$substance->name])) }}">
				<a href="{{ route('shop.index', ['substance'=>$substance->name]) }}">{{ ucwords($substance->name) }}</a>
			</li>
			@endforeach
		</div>

		<h5>Price</h5>
		<div class="">
			<li><a href="{{ route('shop.index',['category'=>request()->category, 'price'=> 'under']) }}">Under 50k</a></li>
			<li><a href="{{ route('shop.index',['category'=>request()->category, 'price'=> 'mid']) }}">IDR 50k - 100k</a></li>
			<li><a href="{{ route('shop.index',['category'=>request()->category, 'price'=> 'high']) }}">IDR 100k - 200k</a></li>
			<li><a href="{{ route('shop.index',['category'=>request()->category, 'price'=> 'over']) }}">Above IDR 200k</a></li>
		</div>
	</ul>
</div> --}}

<div class="sidebar d-none d-xs-none d-sm-none d-md-block d-lg-block">
	<div class="sidebar-wrapper">
		<ul class="nav"> 
			<li class="nav-item">
				<h3>Filter</h3>
				<a href="{{ route('shop.index') }}" class="{{ active(route('shop.index')) }}">
					<p>All Product</p>
				</a>
				<h5>Hair</h5>
				<a href="{{ route('shop.index', ['category'=>'Hair']) }}" class="nav-link {{ active(route('shop.index', ['category'=>'Hair'])) }}">
					<p>All Hair Product</p>
				</a>
				<a href="#col_brand" class="nav-link" data-toggle="collapse">
					<p>Brand :
						<b class="caret"></b>
					</p>
				</a>
				<div class="collapse {{ set_show('shop.index') }}" id="col_brand">
					<ul class="nav">
						@foreach ($brand_hair as $brands)
						<li class="nav-item {{ active(route('shop.index', ['brands'=> $brands->name])) }}">
							<a href="{{ route('shop.index', ['brands'=>$brands->name]) }}" class="nav-link">{{ ucwords($brands->name) }}</a>
						</li>
						@endforeach
					</ul>
				</div>
				<a href="#subs" class="nav-link" data-toggle="collapse">
					<p>Substance :
						<b class="caret"></b>
					</p>
				</a>
				<div class="collapse {{ set_show('shop.index') }}" id="subs">
					<ul class="nav">
						@foreach ($sub_hair as $substance)
						<li class=" nav-item {{ active(route('shop.index', ['substance'=>$substance->name])) }}">
							<a href="{{ route('shop.index', ['substance'=>$substance->name]) }}" class="nav-link">{{ ucwords($substance->name) }}</a>
						</li>
						@endforeach
					</ul>
				</div>


				<h5>Face</h5>
				<a href="{{ route('shop.index', ['category'=>'Face']) }}" class="nav-link {{ active(route('shop.index', ['category'=>'Face'])) }}">
					<p>All Face Product</p>
				</a>
				<a href="#col_brand2" class="nav-link" data-toggle="collapse">
					<p>Brand 
						<b class="caret"></b>
					</p>
				</a>
				<div class="collapse {{ set_show('shop.index') }}" id="col_brand2">
					<ul class="nav">
						@foreach ($brand_face as $brands)
						<li class="nav-item {{ active(route('shop.index', ['brands'=>$brands->name])) }}">
							<a href="{{ route('shop.index', ['brands'=>$brands->name]) }}" class="nav-link">{{ ucwords($brands->name) }}</a>
						</li>
						@endforeach
					</ul>
				</div>
				<a href="#subs2" class="nav-link" data-toggle="collapse">
					<p>Substance 
						<b class="caret"></b>
					</p>
				</a>
				<div class="collapse {{ set_show('shop.index') }}" id="subs2">
					<ul class="nav">
						@foreach ($sub_face as $substance)
						<li class=" nav-item {{ active(route('shop.index', ['substance'=>$substance->name])) }}">
							<a href="{{ route('shop.index', ['substance'=>$substance->name]) }}" class="nav-link">{{ ucwords($substance->name) }}</a>
						</li>
						@endforeach
					</ul>
				</div>


				<h5>Price</h5>
				<p class="nav-link">
					<li class="{{ active(route('shop.index', ['category'=>request()->category, 'price'=> 'under'])) }}"><a href="{{ route('shop.index',['category'=>request()->category, 'price'=> 'under']) }}">Under 50k</a></li>
					<li class="{{  active(route('shop.index', ['category'=>request()->category, 'price'=> 'mid'])) }}"><a href="{{ route('shop.index',['category'=>request()->category, 'price'=> 'mid']) }}">IDR 50k - 100k</a></li>
					<li class="{{  active(route('shop.index', ['category'=>request()->category, 'price'=> 'high'])) }}"><a href="{{ route('shop.index',['category'=>request()->category, 'price'=> 'high']) }}">IDR 100k - 200k</a></li>
					<li class="{{  active(route('shop.index', ['category'=>request()->category, 'price'=> 'over'])) }}"><a href="{{ route('shop.index',['category'=>request()->category, 'price'=> 'over']) }}">Above IDR 200k</a></li>
				</p>

			</li>
		</ul>
	</div>
</div>