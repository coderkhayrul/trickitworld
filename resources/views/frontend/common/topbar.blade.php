
@php
$admin_settings = App\Models\Admin::find(1);
@endphp

<div class="header-top section">
    <div class="container">
        <div class="row">

            <!-- Header Top Links Start -->
            <div class="header-top-links col-md-9 col-6">
                @php
                    $date = \Carbon\Carbon::now();
                @endphp
                <!-- Header Links -->
                <ul class="header-links">
                    <li class="disabled block d-none d-md-block">
                        <a href="#"><i class="fa fa-clock-o"></i>@if (session()->get('language') == 'bangla') {{ bangla_date(time(),"en") }} @else {{ \Carbon\Carbon::parse($date)->format('d F Y')}} @endif</a>
                    </li>
                    <li>
                        <a href="{{ route('home.contact') }}"><i class="fa fa-comments"></i>@if (session()->get('language') == 'bangla')যোগাযোগ করুন @else Contact Us @endif</a>
                    </li>
                    <!-- Language Changes Start -->
                    @if (session()->get('language') == 'bangla')
                    <li>
                        <a href="{{ route('english.language') }}"><i class="fa fa-language"></i></i>English</a>
                    </li>
                    @else
                    <li>
                        <a href="{{ route('bangla.language') }}"><i class="fa fa-language"></i>বাংলা</a>
                    </li>
                    @endif
                    <!-- Language Changes End -->

                </ul>


            </div><!-- Header Top Links End -->

            <!-- Header Top Social Start -->
            <div class="header-top-social col-md-3 col-6">

                <!-- Header Social -->
                <div class="header-social">
                    <a target="_blank" href="{{ $admin_settings->facebook_url }}"><i class="fa fa-facebook"></i></a>
                    <a target="_blank" href="{{ $admin_settings->youtube_url }}"><i class="fa fa-youtube-play"></i></a>
                    <a target="_blank" href="{{ $admin_settings->twitter_url }}"><i class="fa fa-twitter"></i></a>
                    <a target="_blank" href="{{ $admin_settings->pinterest_url }}"><i class="fa fa-pinterest-p"></i></a>
                </div>

            </div><!-- Header Top Social End -->
        </div>
    </div>
</div>

<!-- Header Start -->
<div class="header-section section">
    <div class="container">
        <div class="row align-items-center">

            <!-- Header Logo -->
            <div class="header-logo col-md-4 d-none d-md-block">
                <a href="{{ url('/') }}" class="logo"><img src="{{ $admin_settings->title_image != NULL ? asset($admin_settings->title_image) : asset('default/home/logo_dark.png') }}" alt="Logo"></a>
            </div>
            <!-- Header 734 * 90 Banner Ads Start -->
            @include('frontend.side_widget.top_navbar_ads')
            <!-- Header 734 * 90 Banner Ads End -->
        </div>
    </div>
</div>
<!-- Header End -->
