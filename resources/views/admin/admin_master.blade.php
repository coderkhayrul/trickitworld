<!DOCTYPE html>
<html lang="en">
  <head>
    <title>@yield('title')</title>
    <!-- Primary Meta Tags -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta
    name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('default/admin/apple_favicon_white.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('default/admin/favicon_white.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('default/admin/favicon_white.png') }}">
    <link rel="mask-icon" href="{{ asset('default/admin/favicon_white.png') }}" color="#ffffff">
    {{-- --------------------------------------- LOCAL FILE START ----------------------------------------------- --}}
    <!-- Volt CSS -->
    <link type="text/css" href="{{ asset('backend') }}/css/volt.css" rel="stylesheet">
    {{-- --------------------------------------- LOCAL FILE END ----------------------------------------------- --}}
    @yield('custrom_style')
    {{-- --------------------------------------- CDN START ------------------------------------------ --}}
    <!-- Fontawesome -->
    <link
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    <!-- JQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- DataTable -->
    <link
    rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css">
    <!-- Toster Notification CDN -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css"/>
    {{-- ----------------------------------------- CDN END --------------------------------------------- --}}
    <!-- NOTICE: You can use the _analytics.html partial to include production code specific code & trackers -->
  </head>
  <body>
    {{-- NAVBAR --}}
    @include('admin.common.sidebar')
    <main class="content">
      @include('admin.common.navbar')
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center py-3"></div>
      <div class="row justify-content-md-center">
        @yield('content')
      </div>
      {{-- @include('admin.common.footer') --}}
    </main>
    {{-- --------------------------------------- CDN START -------------------------------- --}}
    <!-- Core -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/14.7.0/nouislider.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jarallax/1.12.7/jarallax.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/smooth-scroll/16.1.3/smooth-scroll.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/chartist/0.11.4/chartist.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/simplebar/5.3.5/simplebar.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    {{-- --------------------------------------- CDN END -------------------------------- --}}
    {{-- ---------------------------------------- LOCAL FILE START ---------------------------------- --}}
    <script src="{{ asset('backend') }}/assets/chartist-plugin-tooltips/chartist-plugin-tooltip.min.js"></script>
    <!-- Volt JS -->
    <script src="{{ asset('backend') }}/assets/js/volt.js"></script>
    {{-- sweetalert2 Script --}}
    <script src="{{ asset('backend') }}/assets/js/code.js"></script>
    <!-- Core -->
    {{-- <script src="{{ asset('backend') }}/vendor/popper.js/dist/umd/popper.min.js"></script> --}}
    {{-- <script src="{{ asset('backend') }}/vendor/bootstrap/dist/js/bootstrap.min.js"></script> --}}
    <!-- Slider -->
    {{-- <script src="{{ asset('backend') }}/vendor/nouislider/distribute/nouislider.min.js"></script> --}}
    <!-- Jarallax -->
    {{-- <script src="{{ asset('backend') }}/vendor/jarallax/dist/jarallax.min.js"></script> --}}
    <!-- Smooth scroll -->
    {{-- <script src="{{ asset('backend') }}/vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script> --}}
    <!-- Charts -->
    {{-- <script src="{{ asset('backend') }}/vendor/chartist/dist/chartist.min.js"></script> --}}
    <!-- Simplebar -->
    {{-- <script src="{{ asset('backend') }}/vendor/simplebar/dist/simplebar.min.js"></script> --}}
    {{-- ---------------------------------------- LOCAL FILE END ---------------------------------- --}}
    {{-- Data Table --}}
    <script>
      $(document).ready(function () {
        $('#table_id').DataTable();
      });
    </script>
    {{-- DATA TABLE --}}
    {{-- Notifications --}}
    <script type="text/javascript">
      @if(Session::has('message'))
      var type = "{{ Session::get('alert-type', 'info') }}"
      switch (type) {
        case 'info':
          toastr.info("{{ Session::get('message') }}");
          break;
        case 'success':
          toastr.success("{{ Session::get('message') }}");
          break;
        case 'warning':
          toastr.warning("{{ Session::get('message') }}");
          break;
        case 'error':
          toastr.error("{{ Session::get('message') }}");
          break;
      }
      @endif
    </script>
    {{-- sweetalert2 cdn --}}
    @yield('custrom_script')
  </body>
</html>
