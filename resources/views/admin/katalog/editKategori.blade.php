@extends('admin.part.layout', ['title'=>'Kategori'])
@section('content')
<div class="main-panel">
@component('admin/part/navbar')
  @slot('header')
    Data Kategori
  @endslot
@endcomponent
<div class="content">
	<!-- Part Alert -->
@if(Session::has('error'))
<div class = "row">
  <div class = "col-md-12 text-center">
    <div class="alert alert-danger" alert-{{
      Session::get('message.alert') }}>
      <button type="button" class="close" data-dismiss="alert">X</button>
      <strong>{{
        Session::get('error')
      }}
      </strong>
    </div>
  </div>
</div>
@endif
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card ">
          <div class="card-header card-header-rose card-header-text">
            <div class="card-text">
              <h4 class="card-title">Edit Kategori</h4>
            </div>
          </div>
          <div class="card-body ">
            <form method="post" action="{{route('category.update',$category->id)}}" class="form-horizontal" enctype="multipart/form-data">
              {{ csrf_field() }}
              {{method_field('patch')}}
              <div class="row" hidden>
                <label class="col-sm-2 col-form-label">ID Katalog</label>
                <div class="col-sm-10">
                  <div class="form-group">
                    <input type="text" class="form-control" name="id_category" value="{{$category->id}}">
                    <span class="bmd-help">*Wajib diisi</span>
                  </div>
                </div>
              </div>
              <div class="row">
                <label class="col-sm-2 col-form-label label-checkbox">Kategori Perawatan</label>
                <div class="col-sm-10 checkbox-radios">
                  @foreach($perawatan as $per)
                    <div class="form-check">
                      <label class="form-check-label">
                        <input class="form-check-input perawatan" type="radio" name="perawatan" value="{{$per->id}}" {{ $per->id == $category->parent_id ? 'checked' : '' }}>{{$per->name}}
                        <span class="circle">
                          <span class="check"></span>
                        </span>
                      </label>
                    </div>
                  @endforeach
                </div>
              </div>
              <div class="row">
                <label class="col-sm-2 col-form-label">Jenis</label>
                <div class="col-sm-10">
                  <select name="jenis" class="selectpicker" data-size="7" data-style="select-with-transition" title="Single Select">
                    <option disabled>Pilih salah satu</option>
                    @foreach($jenis as $jeniss)
                    <option value="{{$jeniss->jenis}}" {{ $jeniss->jenis == $category->jenis ? 'selected' : '' }}>{{ucwords($jeniss->jenis)}}</option>
                    @endforeach
                  </select>
                </div>
	          </div>
	          <div class="row">
                <label class="col-sm-2 col-form-label">Nama Kategori</label>
                <div class="col-sm-10">
                  <div class="form-group">
                    <input type="text" class="form-control" name="nama" value="{{$category->name}}">
                    <span class="bmd-help">*Wajib diisi</span>
                  </div>
                </div>
              </div>
              <div class="text-right">
                <a href="{{route('admin-dataKategori')}}" class="btn btn-danger">Cancel</a>
                <button type="submit" class="btn btn-rose">Submit</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


@stop
