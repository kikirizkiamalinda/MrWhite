<div class="wrapper">
<div class="sidebar" data-color="azure" data-background-color="black" data-image="/image/sidebar-1.jpg">
<div class="logo">
    <a href="{{route('landing-page')}}" class="logo-mini photo"><img src="{{URL::to('image/logoMrWhite.png')}}" /></a>
    <a href="{{route('landing-page')}}" class="simple-text logo-normal"><strong>Mr. White</strong></a>
</div>
<div class="sidebar-wrapper">
    <div class="user">
        <div class="photo">
            <img src="{{ URL::To('image/',Session::get('foto')) }}" />
        </div>
        <div class="user-info">
          <a class="nav-link" href="/index">
            <span>
              <strong>{{Session::get('nama')}}</strong>
            </span>
          </a>
        </div>
    </div>
    <ul class="nav">
        <li class="nav-item {{ set_active('admin.dashboard') }}">
            <a class="nav-link" href="{{URL::to('admin')}}">
                <i class="material-icons">dashboard</i>
                <p> Dashboard</p>
            </a>
          </li>
          <li class="nav-item ">
              <a class="nav-link" data-toggle="collapse" href="#katalog">
                  <i class="material-icons">grid_on</i>
                  <p> Katalog
                     <b class="caret"></b>
                  </p>
              </a>
              <div class="collapse {{ set_show('admin-dataProduk') }}{{ set_show('admin-dataKategori') }}{{ set_show('admin.produkBaru') }}{{ set_show('admin-editProduk') }}{{set_show('admin-editKategori') }}" id="katalog">
                  <ul class="nav">
                      <li class="nav-item {{ set_active('admin-dataProduk') }} {{ set_active('admin-editProduk') }}">
                          <a class="nav-link" href="{{URL::to('admin/katalog/dataProduk')}}">
                            <span class="sidebar-mini"> DP </span>
                            <span class="sidebar-normal"> Data Produk </span>
                          </a>
                      </li>
                      <li class="nav-item {{ set_active('admin-dataKategori') }} {{ set_active('admin-editKategori') }}">
                          <a class="nav-link" href="{{URL::to('admin/katalog/dataKategori')}}">
                            <span class="sidebar-mini"> DK </span>
                            <span class="sidebar-normal"> Data Kategori </span>
                          </a>
                      </li>
                      <li class="nav-item {{ set_active('admin.produkBaru') }}">
                          <a class="nav-link" href="{{URL::to('admin/katalog/produkBaru')}}">
                            <span class="sidebar-mini"> PB </span>
                            <span class="sidebar-normal"> Produk Baru </span>
                          </a>
                      </li>
                  </ul>
              </div>
          </li>
          <li class="nav-item ">
            <a class="nav-link" data-toggle="collapse" href="#websetting">
                <i class="material-icons">build</i>
                <p> Web Setting
                   <b class="caret"></b>
                </p>
            </a>

            <div class="collapse {{ set_show('web.setting') }}{{ set_show('admin.component') }}{{ set_show('banner') }}" id="websetting">
                <ul class="nav">
                    <li class="nav-item {{ set_active('web.setting') }}">
                        <a class="nav-link" href="{{URL::to('admin/webSetting/homepage')}}">
                          <span class="sidebar-mini"> H </span>
                          <span class="sidebar-normal"> Homepage </span>
                        </a>
                    </li>
                    <li class="nav-item {{ set_active('banner') }}">
                        <a class="nav-link" href="{{URL::to('admin/webSetting/banner')}}">
                          <span class="sidebar-mini"> B </span>
                          <span class="sidebar-normal"> Banner </span>
                        </a>
                    </li>
                </ul>
            </div>
        </li>
      </div>
  </div>
