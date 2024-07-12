<!DOCTYPE html>
<html lang="en">
  @include('layout.header')

  <body>
    <div id="layout-wrapper">
      <!-- =========== HEADER START ========================= -->
      @include('layout.navbar')
      <!-- =========== HEADER END =========================== -->

      <!-- ========== Left Sidebar Start ========== -->
      @include('layout.sidebar')
      <!-- ======================== Left Sidebar End =========================== -->

      <!-- ========================== Konten =================================== -->
      @yield('content')
      <!-- ======================== Konten ======================================== -->

      <!-- Overlay-->
      <div class="menu-overlay"></div>

      <!-- jQuery  -->
      @include('layout.footer')
    </div>
  </body>
</html>
