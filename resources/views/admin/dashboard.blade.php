  @extends('admin.part.layout', ['title'=>'Dashboard'])
  @section('content')
  <div class="main-panel">
  @component('admin/part/navbar')
    @slot('header')
      Dashboard
    @endslot
  @endcomponent

  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="card card-stats">
                <div class="card-header card-header-warning card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">business_center</i>
                  </div>
                  <p class="card-category">Jumlah Produk</p>
                  <h3 class="card-title">{{ $jml_pro }}</h3>
                </div>
                <div class="card-footer">
                    <div class="stats">
                        Jumlah produk yang tersedia
                    </div>
                </div>
            </div>
        </div>
          <div class="col-lg-4 col-md-6 col-sm-6">
              <div class="card card-stats">
                  <div class="card-header card-header-rose card-header-icon">
                    <div class="card-icon">
                      <i class="material-icons">confirmation_number</i>
                    </div>
                    <p class="card-category">Total Brand</p>
                    <h3 class="card-title">{{ $jml_brand }}</h3>
                  </div>
                  <div class="card-footer">
                      <div class="stats">
                          Jumlah brand yang ada
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6">
              <div class="card card-stats">
                  <div class="card-header card-header-success card-header-icon">
                    <div class="card-icon">
                      <i class="material-icons">gradient</i>
                    </div>
                    <p class="card-category">Total Bahan</p>
                    <h3 class="card-title">{{ $jml_bahan }}</h3>
                  </div>
                  <div class="card-footer">
                      <div class="stats">
                          Jumlah bahan yang ada
                      </div>
                  </div>
              </div>
          </div>
      </div>
    </div>
    <div class="row">
    <div class="col-lg-5 col-md-6 col-sm-6">
      <div class="card">
          <div class="card-header card-header-icon card-header-info">
            <div class="card-icon">
              <i class="material-icons">timeline</i>
            </div>
            <h4 class="card-title">Pencapaian VS Target Penjualan
            </h4>
          </div>
          <div class="card-body">
              @include('admin.part.linechart')
          </div>
      </div>
  </div>
  <div class="col-lg-7 col-md-6 col-sm-6">
    <div class="card">
        <div class="card-header card-header-icon card-header-danger">
          <div class="card-icon">
            <i class="material-icons">insert_invitation</i>
          </div>
          <h4 class="card-title">Agenda MR White
          </h4>
        </div>
        <div class="card-body">
            @include('admin.part.calendar')
        </div>
    </div>
  </div>
</div>
</div>
@stop
