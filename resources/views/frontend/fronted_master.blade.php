<!doctype html>
<html class="no-js" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>@yield('title')</title>
    @php
    $admin_settings = App\Models\Admin::find(1);
    @endphp
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="author"
        content="@if(session()->get('language') == 'bangla'){{ $admin_settings->meta_author_ban }}@else{{ $admin_settings->meta_author_en }}@endif">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="google-site-verification" content="6AORxK8A6j50zcRhCkYcpzBGptly4PHr0o-jj7pKXJY" />
    <!-- Facebook Page -->
    <meta property="fb:pages" content="103901634319770" />
    @yield('custrom_metadata')
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon"
        href="{{ $admin_settings->fav_icon != NULL ? asset($admin_settings->fav_icon) : 'upload/defualt/fav_icon.png' }}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/plugins.css">
    <!-- Style CSS -->
    <link rel="stylesheet" href="{{ asset('frontend') }}/style.css">
    <!-- Modernizer JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
    <!-- Custrom style -->
    @yield('custrom_style')
    <!-- Custrom style -->

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-204164438-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-204164438-1');

    </script>

    <!-- Google AdSense -->
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-5937244308155885"
        crossorigin="anonymous"></script>
    <!-- End Google AdSense -->


</head>

<body>
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous"
        src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v11.0&appId=422059265828054&autoLogAppEvents=1"
        nonce="5T3syam6"></script>

    <!-- Main Wrapper -->
    <div id="main-wrapper">
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
