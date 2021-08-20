<!doctype html>
<html class="no-js" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
      <title>@yield('title')</title>
    @php
        $admin_settings = App\Models\Admin::find(1);
    @endphp
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="author" content="@if(session()->get('language') == 'bangla'){{ $admin_settings->meta_author_ban }}@else{{ $admin_settings->meta_author_en }}@endif">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="google-site-verification" content="6AORxK8A6j50zcRhCkYcpzBGptly4PHr0o-jj7pKXJY" />
    <!-- Facebook Page -->
    <meta property="fb:pages" content="103901634319770" />
    @yield('custrom_metadata')
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ $admin_settings->fav_icon != NULL ? asset($admin_settings->fav_icon) : 'upload/defualt/fav_icon.png' }}">
    <!-- Bootstrap CSS -->
    <link
    rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <!-- Icon Font CSS -->
    <link
    rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <!-- Plugins CSS -->
    <link
    rel="stylesheet" href="{{ asset('frontend') }}/css/plugins.css">
    <!-- Style CSS -->
    <link
    rel="stylesheet" href="{{ asset('frontend') }}/style.css">
    <!-- Modernizer JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
    <!-- Custrom style -->
    @yield('custrom_style')
    <!-- Custrom style -->

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-204164438-1"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-204164438-1');
    </script>

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-WQWQ5CT');</script>
    <!-- End Google Tag Manager -->

    <!-- Google AdSense -->
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-5937244308155885"
     crossorigin="anonymous"></script>
    <!-- End Google AdSense -->


  </head>
  <body>
    <?php
    define('_MN_USER', '6242d1f9f47328fd657122bbe7ad14cf93d080b0');
    require_once($_SERVER['DOCUMENT_ROOT'].'/'._MN_USER.'/magenet.php');
    $magenet = new Magenet();
    echo $magenet->getLinks();
    ?>
    <!-- Main Wrapper -->
    <div
      id="main-wrapper">
      <!-- Header Top Start -->
      @include('frontend.common.topbar')
      <!-- Header Top End -->
      <!-- Menu Section Start -->
      @include('frontend.common.navbar')
      <!-- Menu Section End -->
      @yield('content')

      <!-- Brand Section Start -->
      {{-- @include('frontend.common.brand') --}}
      <!-- Brand Section End -->
      <!-- Footer Section Start -->
    @include('frontend.common.footer')
      <!-- Footer Section End -->
    </div>
    <!-- jQuery JS -->
    <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <!-- Go to www.addthis.com/dashboard to customize your tools -->
    {{-- <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-60faff88f70dd811"></script> --}}
    <!-- Plugins JS -->
    <script src="{{ asset('frontend') }}/js/plugins.js"> </script>
    <!-- Main JS -->
    <script src="{{ asset('frontend') }}/js/main.js"></script>
    @yield('custrom_script')

  </body>
</html>
