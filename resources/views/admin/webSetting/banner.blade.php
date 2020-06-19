@extends('admin.part.layout', ['title'=>'Web Setting'])
@section('content')
<div class="main-panel">

	@component('admin/part/navbar')
	@slot('header')
	Banner
	@endslot
	@endcomponent	
	<div class="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<div class="card">
						<div class="card-header card-header-default card-header-icon">
							<div class="card-icon">
								<a data-toggle="modal" href="#tambah" class="btn-link btn-just-icon" title="tambah"><i class="material-icons">add_box</i></a>
							</div>
							@include('component.alert')
							
							<h4 class="card-title">Banner Setting</h4>
							<div>
								<div class="card-body">
									<div class="material-datatables">
										<table class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
											<thead class="thead-dark">
												<tr>
													<th>ID</th>
													<th>Nama</th>
													<th>Gambar</th>
													<th>Show Date</th>
													<th>Off Date</th>
													<th>Link</th>
													<th class="text-center">Action</th>
												</tr>
											</thead>
											<tbody style="color: #000;">
												@foreach ($banner as $banners)
												<tr>
													<td>{{ $banners->id }}</td>
													<td>{{ ucwords($banners->name) }}</td>
													<td><img src="{{ URL::to('image/',$banners->url_gambar) }}" style="width: 8rem;"></td>
													<td>{{ $banners->date_show }}</td>
													<td>{{ $banners->date_off }}</td>
													<td>{{ str_limit($banners->url_link, 20) }}</td>
													<td>
														<div class='btn-group d-flex justify-content-center' role='group' aria-label='...'>
															<a data-toggle="modal" href="#show" class="show-modal btn btn-link btn-info btn-just-icon" title="lihat" @include('admin.part.data_banner')><i class="material-icons">remove_red_eye</i></a>
															<a data-toggle="modal" href="#edit" class="edit-modal btn btn-link btn-success btn-just-icon" title="edit" @include('admin.part.data_banner')><i class="material-icons">edit</i></a>
															<a data-toggle="modal" href="#delete" class="delete-modal btn btn-link btn-danger btn-just-icon" title="delete" data-id="{{ $banners->id }}"><i class="material-icons" title="delete">delete</i></button>
														</div>
													</td>
												</tr>
												@endforeach
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div><!--  end card  -->
				</div> <!-- end col-md-12 -->
			</div> <!-- end row -->
		</div>
	</div>
	<!-- Modal tambah -->
	<div class="modal fade" id="tambah" role="dialog">
		<div class="modal-dialog modal-lg" role="document">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Tambah Produk</h4>
				</div>
				<div class="modal-body">
					<form method="post" class="form-horizontal" action="{{ route('banner.store') }}" enctype="multipart/form-data">
						{{ csrf_field() }}
						<div class="row">
							<label class="col-sm-2 col-form-label" style="display:block;text-align:right;">
								Nama Banner
							</label>
							<div class="col-sm-10">
								<div class="form-group">
									<input type="text" class="form-control" name="name">
									<span class="bmd-help">A block of help text that breaks onto a new line.</span>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4 col-sm-4 ml-auto mr-auto">
								<div class="fileinput fileinput-new text-center" data-provides="fileinput">
									<div class="fileinput-new thumbnail">
										<img src="{{URL::to('image/image_placeholder.jpg')}}" id="showgambar" alt="...">
									</div>
									<div class="fileinput-preview fileinput-exists thumbnail"></div>
									<div>
										<input type="file" id="inputgambar" name="gambarban" class="validate"/ >
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<label class="col-sm-2 col-form-label" style="display:block;text-align:right;">
								Show Date
							</label>
							<div class="col-sm-10">
								<div class="form-group">
									<input type="date" class="form-control" name="date_show">
									<span class="bmd-help">A block of help text that breaks onto a new line.</span>
								</div>
							</div>
						</div>
						<div class="row">
							<label class="col-sm-2 col-form-label" style="display:block;text-align:right;">
								Off Date
							</label>
							<div class="col-sm-10">
								<div class="form-group">
									<input type="date" class="form-control" name="date_off">
									<span class="bmd-help">A block of help text that breaks onto a new line.</span>
								</div>
							</div>
						</div>
						<div class="row">
							<label class="col-sm-2 col-form-label" style="display:block;text-align:right;">
								Link
							</label>
							<div class="col-sm-10">
								<div class="form-group">
									<input type="text" class="form-control" name="link">
									<span class="bmd-help">A block of help text that breaks onto a new line.</span>
								</div>
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<button type="submit" class="btn btn-primary">Add</button>
						<button type="button" class="btn btn-warning" data-dismiss="modal">Cancel</button>
					</div>
				</div>
			</form>
		</div>
	</div>

	<!-- Modal Show -->

	<div class="modal fade" id="show" role="dialog">
		<div class="modal-dialog modal-lg" role="document">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Banner</h4>
				</div>
				<div class="modal-body">
					<div class="row">
						<div class="col-sm-9">
							<div class="row">
								<p class="col-sm-3">ID</p>
								<p class="col-sm-1">:</p>
								<b class="col-sm-8" id=banner_id></b>
							</div>

							<div class="row">
								<p class="col-sm-3">Nama</p>
								<p class="col-sm-1">:</p>
								<b class="text-capitalize col-sm-8" id=banner_name></b>
							</div>
							<div class="row">
								<p class="col-sm-3">Show Date</p>
								<p class="col-sm-1">:</p>
								<b class="col-sm-8" id=tampil></b>
							</div>
							<div class="row">
								<p class="col-sm-3">Off Date </p>
								<p class="col-sm-1">:</p>
								<b class="col-sm-8" id=sudah></b>
							</div>
							<div class="row">
								<p class="col-sm-3">Link </p>
								<p class="col-sm-1">:</p>
								<b class="col-sm-8" id=link></b>
							</div>

						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-warning" data-dismiss="modal">Tutup</button>
				</div>
			</div>
		</div>
	</div>

	<!-- Edit Show -->

	<div class="modal fade" id="edit" role="dialog">
		<div class="modal-dialog modal-lg" role="document">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Edit Produk</h4>
				</div>
				<div class="modal-body">
					<form method="post" class="form-horizontal" action="{{ route('banner.update','test') }}" enctype="multipart/form-data">
						{{ csrf_field() }}
						{{method_field('patch')}}
						<div class="row">
							<label class="col-sm-2 col-form-label" style="display:block;text-align:right;">
								ID Banner
							</label>
							<div class="col-sm-10">
								<div class="form-group">
									<input type="text" class="form-control" name="id" id = "ban_id">
									<span class="bmd-help">A block of help text that breaks onto a new line.</span>
								</div>
							</div>
						</div>
						<div class="row">
							<label class="col-sm-2 col-form-label" style="display:block;text-align:right;">
								Nama Banner
							</label>
							<div class="col-sm-10">
								<div class="form-group">
									<input type="text" class="form-control" name="name" id = "ban_name">
									<span class="bmd-help">A block of help text that breaks onto a new line.</span>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4 col-sm-4 ml-auto mr-auto">
								<div class="fileinput fileinput-new text-center" data-provides="fileinput">
									<div class="fileinput-new thumbnail">
										<img src="{{URL::to('image/image_placeholder.jpg')}}" id="showgambar" alt="...">
									</div>
									<div class="fileinput-preview fileinput-exists thumbnail"></div>
									<div>
										<input type="file" id="ban_pic" name="gambarban" class="validate"/ >
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<label class="col-sm-2 col-form-label" style="display:block;text-align:right;">
								Show Date
							</label>
							<div class="col-sm-10">
								<div class="form-group">
									<input type="date" class="form-control" name="date_show" id = "shwdate">
									<span class="bmd-help">A block of help text that breaks onto a new line.</span>
								</div>
							</div>
						</div>
						<div class="row">
							<label class="col-sm-2 col-form-label" style="display:block;text-align:right;">
								Off Date
							</label>
							<div class="col-sm-10">
								<div class="form-group">
									<input type="date" class="form-control" name="date_off" id = "offdate">
									<span class="bmd-help">A block of help text that breaks onto a new line.</span>
								</div>
							</div>
						</div>
						<div class="row">
							<label class="col-sm-2 col-form-label" style="display:block;text-align:right;">
								Link
							</label>
							<div class="col-sm-10">
								<div class="form-group">
									<input type="text" class="form-control" name="link">
									<span class="bmd-help">A block of help text that breaks onto a new line.</span>
								</div>
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<button type="submit" class="btn btn-primary">Edit</button>
						<button type="button" class="btn btn-warning" data-dismiss="modal">Cancel</button>
					</div>
				</div>
			</form>
		</div>
	</div>

	<!-- Modal Delete -->
	<div class="modal modal-danger fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title text-center" id="myModalLabel">Delete Confirmation</h4>
				</div>
				<form action="{{route('banner.destroy','test')}}" method="post">
					{{method_field('delete')}}
					{{csrf_field()}}
					<div class="modal-body">
						<p class="text-center">
							Are you sure you want to delete this?
						</p>
						<input type="hidden" name="id" id="banid">

					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-success" data-dismiss="modal">Tidak</button>
            			<button type="submit" class="btn btn-warning">Ya, Saya yakin</button>
					</div>
				</form>
			</div>
		</div>
	</div>


	@stop
