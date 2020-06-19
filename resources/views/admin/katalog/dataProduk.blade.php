@extends('admin.part.layout', ['title'=>'Katalog'])
@section('content')
<div class="main-panel">
@component('admin/part/navbar')
  @slot('header')
    Data Produk
  @endslot
@endcomponent
<div class="content">
  <!-- Part Alert -->
@if(Session::has('success'))
<div class = "row">
  <div class = "col-md-12 text-center">
    <div class="alert alert-success" alert-{{
      Session::get('message.alert') }}>
      <button type="button" class="close" data-dismiss="alert">X</button>
      <strong>{{
        Session::get('success')
      }}
      </strong>
    </div>
  </div>
</div>
@endif
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
          <div class="card">
            <div class="card-header card-header-primary card-header-icon">
              <div class="card-icon">
                <i class="material-icons">assignment</i>
              </div>
              <h4 class="card-title">Data Produk</h4>
            </div>
              <div class="card-body">
                <div class="material-datatables">
                  <table id="dataProduk" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                    <thead class="thead-dark">
                      <tr>
                        <th>Barcode</th>
                        <th>Nama</th>
                        <th>Harga</th>
                        <th>Gambar</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($product as $products)

                      <tr>
                        <td>{{$products->barcode}}</td>
                        <td>{{ucwords($products->nama)}}</td>
                        <td>Rp. {{ $products->presentPrice() }}</td>
                        <td><img src="{{ URL::to('image/',$products->url_gambar) }}"width=100px/></td>
                        <td>
                          <div class='btn-group' role='group' aria-label='...'>
                            <a data-toggle="modal" href="#" class="show-modal btn btn-link btn-info btn-just-icon" title="lihat" @include('admin.part.data')><i class="material-icons">remove_red_eye</i></a>
                            <a href='{{URL::to("admin/katalog/editProduk/{$products->id}")}}' class="btn btn-link btn-success btn-just-icon" title="edit"><i class="material-icons">edit</i></a>
                            <a data-toggle="modal" href="#delete" class="delete-modal btn btn-link btn-danger btn-just-icon" title="delete" data-id="{{ $products->id }}"><i class="material-icons" title="delete">delete</i></button>
                          </div>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                  </div>
              </div><!-- end content-->
          </div><!--  end card  -->
      </div> <!-- end col-md-12 -->
  </div> <!-- end row -->
</div>
</div>

<!-- Modal Show -->
<div class="modal fade" id="show" role="dialog">
  <div class="modal-dialog modal-lg" role="document">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Show</h4>
      </div>
      <div class="modal-body">
        <div class="row">
        <div id="gamb" class="col-sm-3">
          <img src = "{{ URL::TO('image/logo2.png') }}" width=150px />
        </div>
        <div class="col-sm-9">
          <div class="row">
            <p class="col-sm-3">ID</p>
            <p class="col-sm-1">:</p>
            <b class="col-sm-8" id=id></b>
          </div>
          <div class="row">
            <p class="col-sm-3">Barcode</p>
            <p class="col-sm-1">:</p>
            <b class="col-sm-8" id=barc></b>
          </div>
          <div class="row">
            <p class="col-sm-3">Nama</p>
            <p class="col-sm-1">:</p>
            <b class="text-capitalize col-sm-8" id=nama></b>
          </div>
          <div class="row">
            <p class="col-sm-3">Harga</p>
            <p class="col-sm-1">:</p>
            <b class="col-sm-1">Rp</b><b id=harga></b>
          </div>
          <div class="row">
            <p class="col-sm-3">Deskripsi</p>
            <p class="col-sm-1">:</p>
            <b class="col-sm-8" id=desc></b>
          </div>
        </div>
      </div>
      </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-warning" data-dismiss="modal">Cancel</button>
        </div>
      </div>
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
      <form action="{{route('admin.destroy','test')}}" method="post">
      		{{method_field('delete')}}
      		{{csrf_field()}}
	      <div class="modal-body">
				<p class="text-center">
					Apa Anda yakin menghapus produk ini?
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
