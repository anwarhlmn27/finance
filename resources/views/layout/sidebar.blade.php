<div class="vertical-menu">
        <div data-simplebar class="h-100">
          <div class="navbar-brand-box p-3">
            <!-- <a href="index.html" class="logo"> -->
            <img src="assets/images/logo_akti.png" class="img-fluid" />
            <!-- </a> -->
          </div>

          <!--- Sidemenu -->
          <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
              <li class="menu-title">Menu</li>

              <li>
                <a href="{{url('')}}" class="waves-effect"
                  ><i class="bx bx-home-smile"></i>
                  <span class="badge badge-pill badge-primary float-right">
                    7
                  </span>
                  <span>Dashboard</span>
                </a>
              </li>

              <li>
                <a href="javascript: void(0);" class="has-arrow waves-effect"
                  ><i class="bx bx-file"></i><span>Transaksi</span></a
                >
                <ul class="sub-menu" aria-expanded="false">
                  <li><a href="{{url('list-beli')}}">Pembelian</a></li>
                  <li><a href="{{url('soon')}}">Penjualan</a></li>
                </ul>
              </li>

              <li>
                <a href="javascript: void(0);" class="has-arrow waves-effect"
                  ><i class="bx bx-file"></i><span>Setting</span></a
                >
                <ul class="sub-menu" aria-expanded="false">
                  <li><a href="form_undang_pengguna.html">Pengguna Baru</a></li>
                  <li><a href="{{url('data_kontak')}}">Kontak</a></li>
                  <li><a href="login.html">Login</a></li>
                  <li><a href="recovery.html">Recovery</a></li>
                </ul>
              </li>
            </ul>
          </div>
          <!-- Sidebar -->
        </div>
      </div>