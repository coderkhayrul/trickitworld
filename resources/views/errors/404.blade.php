
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- Primary Meta Tags -->
<title>Not Found || Trick it World</title>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Favicon -->
<link rel="apple-touch-icon" sizes="120x120" href="{{ asset('default/admin/apple_favicon_white.png') }}">
<link rel="icon" type="image/png" sizes="32x32" href="{{ asset('default/admin/favicon_white.png') }}">
<link rel="icon" type="image/png" sizes="16x16" href="{{ asset('default/admin/favicon_white.png') }}">
<link rel="mask-icon" href="{{ asset('default/admin/favicon_white.png') }}" color="#ffffff">


{{-- ////////////////////////////////////////////////////////////////////////////////////////////////////// --}}
{{-- --------------------------------------- LOCAL FILE START --------------------------------------------- --}}
    <!-- Volt CSS -->
    <link type="text/css" href="{{ asset('backend') }}/css/volt.css" rel="stylesheet">
{{-- --------------------------------------- LOCAL FILE END ----------------------------------------------- --}}

{{-- //////////////////////////////////////////////@@@@@@@@@@@@@@////////////////////////////////////////// --}}

{{-- --------------------------------------- CDN START ------------------------------------------ --}}

<!-- Fontawesome -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">

{{-- ----------------------------------------- CDN END --------------------------------------------- --}}
{{-- /////////////////////////////////////////////////////////////////////////////////////////////// --}}


<!-- NOTICE: You can use the _analytics.html partial to include production code specific code & trackers -->

</head>

<body>
    <main>
        <section class="vh-100 d-flex align-items-center justify-content-center">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center d-flex align-items-center justify-content-center">
                        <div>
                            <img class="img-fluid w-75" src="{{ asset('backend') }}/assets/img/illustrations/404.svg" alt="404 not found">
                            <h1 class="mt-5">Page not <span class="font-weight-bolder text-primary">found</span></h1>
                            <p class="lead my-4">Oops! Looks like you followed a bad link. If you think this is a
                                problem with us, please tell us.</p>
                            <a class="btn btn-primary animate-hover" href="{{ url('/') }}"><i class="fas fa-chevron-left mr-3 pl-2 animate-left-3"></i>Go back home</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    {{-- --------------------------------------- CDN START -------------------------------- --}}

    <!-- Core -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/smooth-scroll/16.1.3/smooth-scroll.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/chartist/0.11.4/chartist.min.js"></script>

    {{-- --------------------------------------- CDN END -------------------------------- --}}

{{-- ---------------------------------------- LOCAL FILE START ---------------------------------- --}}
<script src="{{ asset('backend') }}/assets/chartist-plugin-tooltips/chartist-plugin-tooltip.min.js"></script>
<!-- Volt JS -->
<script src="{{ asset('backend') }}/assets/js/volt.js"></script>

{{-- ---------------------------------------- LOCAL FILE END ---------------------------------- --}}


</body>

</html>
