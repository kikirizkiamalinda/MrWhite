@extends('admin.part.layout', ['title'=>'Produk Baru'])
@section('content')
<div class="main-panel">
@component('admin/part/navbar')
  @slot('header')
    Produk Baru
  @endslot
@endcomponent
<div class="content">
{{-- part alert --}}
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
        <div class="card ">
          <div class="card-header card-header-rose card-header-text">
            <div class="card-text">
              <h4 class="card-title">Produk Baru</h4>
            </div>
          </div>
          <div class="card-body ">
            <form method="post" action="{{route('admin.store')}}" class="form-horizontal" enctype="multipart/form-data">
              {{ csrf_field() }}
              <div class="row">
                <label class="col-sm-2 col-form-label">Nama Produk</label>
                <div class="col-sm-10">
                  <div class="form-group">
                    <input type="text" class="form-control" name="nama">
                    <span class="bmd-help">*Wajib diisi</span>
                  </div>
                </div>
              </div>
              <div class="row">
                <label class="col-sm-2 col-form-label">Barcode</label>
                <div class="col-sm-2">
                  <div class="form-group">
                    <input type="text" class="form-control" name="barcode" onkeypress="return hanyaAngka(event)">
                    <span class="bmd-help">*Hanya Angka</span>
                  </div>
                </div>
              </div>
              <div class="row">
                <label class="col-sm-2 col-form-label">Harga</label>
                <label class="col-form-label">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rp</label>
                <div class="col-sm-2">
                  <div class="form-group">
                    <input type="text" class="form-control" name="harga" onkeypress="return hanyaAngka(event)">
                    <span class="bmd-help">*Hanya Angka</span>
                  </div>
                </div>
              </div>
              <div class="row">
                <label class="col-sm-2 col-form-label">Deskripsi</label>
                <div class="col-sm-10">
                  <div class="form-group">
                    <textarea type="text" class="form-control" name="deskripsi"></textarea>
                    <span class="bmd-help">*Wajib diisi</span>
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
                      <input type="file" id="inputgambar" name="gambar" class="validate"/ >
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <label class="col-sm-2 col-form-label label-checkbox">Kategori Perawatan</label>
                <div class="col-sm-10 checkbox-radios">
                  @foreach($perawatan as $per)
                    <div class="form-check">
                      <label class="form-check-label">
                        <input class="form-check-input perawatan" type="radio" name="perawatan" value="{{$per->id}}" onClick="javascript:return yourfunction({{$per->id}})" {{ $per->id == '1' ? 'checked' : '' }}>{{$per->name}}
                        <span class="circle">
                          <span class="check"></span>
                        </span>
                      </label>
                    </div>
                  @endforeach
                </div>
              </div>
              <div class="row">
                <label class="col-sm-2 col-form-label">Brand</label>
                <div id="brand_hair" class="col-sm-10">
                  <select name="br" class="selectpicker" data-size="7" data-style="select-with-transition" title="Single Select">
                    <option disabled selected>Pilih salah satu</option>
                    @foreach($hair_brand as $hba)
                    <option value="{{$hba->id}}">{{ucwords($hba->name)}}</option>
                    @endforeach
                  </select>
                </div>
                <div id="brand_face" class="col-sm-10" style="display:none">
                  <select name="br" class="selectpicker" data-size="7" data-style="select-with-transition" title="Single Select" >
                    <option disabled selected>Pilih salah satu</option>
                    @foreach($face_brand as $hba)
                    <option value="{{$hba->id}}">{{ucwords($hba->name)}}</option>
                    @endforeach
                  </select>
                </div>
              </div>
              <div class="row">
                <label class="col-sm-2 col-form-label">Bahan</label>
                <div id="bahan_hair" class="col-sm-10">
                  <select name="ba" class="selectpicker" data-size="7" data-style="select-with-transition" title="Single Select">
                    <option disabled selected>Pilih salah satu</option>
                    @foreach($hair_bahan as $hba)
                    <option value="{{$hba->id}}">{{ucwords($hba->name)}}</option>
                    @endforeach
                  </select>
                </div>
                <div id="bahan_face" class="col-sm-10" style="display:none">
                  <select name="ba" class="selectpicker" data-size="7" data-style="select-with-transition" title="Single Select">
                    <option disabled selected>Pilih salah satu</option>
                    @foreach($face_bahan as $hba)
                    <option value="{{$hba->id}}">{{ucwords($hba->name)}}</option>
                    @endforeach
                  </select>
                </div>
              </div>
              <div class="row">
                <label class="col-sm-2 col-form-label label-checkbox">Store</label>
                <div class="col-sm-10 checkbox-radios" name="store">
                  <div class="form-check form-check-inline">
                    <label class="form-check-label">
                      <input id="bukalapak" class="form-check-input" name="bukalapak" type="checkbox" value="bukalapak"> Bukalapak
                      <span class="form-check-sign">
                        <span class="check"></span>
                      </span>
                    </label>
                  </div>
                  <div class="form-check form-check-inline">
                    <label class="form-check-label">
                      <input id="tokopedia" class="form-check-input" name="tokopedia" type="checkbox" value="tokopedia"> Tokopedia
                      <span class="form-check-sign">
                        <span class="check"></span>
                      </span>
                    </label>
                  </div>
                </div>
              </div>
              <div name="linkss">
                <div id="bukalapakk" class="row" style="display:none">
                  <label class="col-sm-2 col-form-label">Link Bukalapak</label>
                  <div class="col-sm-10">
                    <div class="form-group">
                      <input type="text" name="bukalapakk" class="form-control">
                      <span class="bmd-help">*Wajib diisi</span>
                    </div>
                  </div>
                </div>
                <div id="tokopediaa" class="row" style="display:none">
                  <label class="col-sm-2 col-form-label">Link Tokopedia</label>
                  <div class="col-sm-10">
                    <div class="form-group">
                      <input type="text" name="tokopediaa" class="form-control">
                      <span class="bmd-help">*Wajib diisi</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="text-right">
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
