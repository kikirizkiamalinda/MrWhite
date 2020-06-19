<div class="container py-2" style="margin-bottom: 0rem; ">
	@if (session()->has('success_message'))
		<div class="alert alert-success alert-dismissible fade show" role="alert">
			{{ session()->get('success_message') }}
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			    <span aria-hidden="true">&times;</span>
			</button>
		</div>
	@endif
	@if (count($errors)>0)
		<div class="alert alert-danger alert-dismissible fade show" role="alert">
			<ul>
				@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
				@endforeach
			</ul>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			    <span aria-hidden="true">&times;</span>
			</button>
		</div>
	@endif
</div>