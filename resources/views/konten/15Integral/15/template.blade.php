
<!doctype html>
<html lang="en">
  @include('konten.00semuamateri.head')

  <body >
    <script src="{{asset('/dist/js/demo-theme.min.js?1684106062')}}"></script>
    <div class="page">

    {{-- GANTI --}}
        @include('konten.15Integral.15.sidebar')

      <!-- Navbar -->
        @include('konten.00semuamateri.topnav')

      <div class="page-wrapper">
        <!-- Page header -->

        <!-- Page body -->
        @yield('content')

        @include('konten.00semuamateri.footer')
      </div>
    </div>

   {{-- GANTI --}}
    @include('konten.15Integral.15.script')

  </body>
</html>
