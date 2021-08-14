
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- Primary Meta Tags -->
<title>Admin Login | Trick it World</title>
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

        <!-- Section -->
        <section class="d-flex align-items-center my-5 mt-lg-6 mb-lg-5">
            <div class="container">
                <p class="text-center"><a href="{{ url('/') }}" class="text-gray-700"><i class="fas fa-angle-left mr-2"></i> Back to homepage</a></p>
                <div class="row justify-content-center form-bg-image" data-background-lg="{{ asset('backend') }}/assets/img/illustrations/signin.svg">
                    <div class="col-12 d-flex align-items-center justify-content-center">
                        <div class="bg-white shadow-soft border rounded border-light p-4 p-lg-5 w-100 fmxw-500">
                            <div class="text-center text-md-center mb-4 mt-md-0">
                                <h1 class="mb-0 h3">Sign in to Admin Panel</h1>
                            </div>
                            <form method="POST" action="{{ route('login') }}" class="mt-4">
                                @csrf
                                <!-- Form -->
                                <div class="form-group mb-4">
                                    <label for="email">Your Email</label>
                                    <div class="input-group">
                                        <span class="input-group-text" id="basic-addon1"><span class="fas fa-envelope"></span></span>
                                        <input id="email" name="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" placeholder="example@company.com" autofocus required>
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <!-- End of Form -->
                                <div class="form-group">
                                    <!-- Form -->
                                    <div class="form-group mb-4">
                                        <label for="password">Your Password</label>
                                        <div class="input-group">
                                            <span class="input-group-text" id="basic-addon2"><span class="fas fa-unlock-alt"></span></span>
                                            <input type="password" placeholder="Password" name="password"
                                            class="form-control @error('password') is-invalid @enderror" id="password" required autocomplete="current-password">
                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <!-- End of Form -->
                                    <div class="d-flex justify-content-between align-items-top mb-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                            <label class="form-check-label mb-0" for="remember">
                                              Remember me
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-block btn-primary">Sign in</button>
                            </form>
                            <br>
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
