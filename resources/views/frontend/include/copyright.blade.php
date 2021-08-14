@extends('frontend.fronted_master')

@section('title')
Copyright - Trick It World
@endsection

@section('custrom_style')
<link rel="canonical" href="{{ url('copyright/') }}" />
@endsection

@section('content')
<!-- Page Banner Section Start -->
<div class="page-banner-section section mt-30 mb-30">

</div><!-- Page Banner Section End -->

<!-- Post Section Start -->
<div class="post-section section">
    <div class="container">

        <!-- Feature Post Row Start -->
        <div class="row">

            <div class="col-lg-8 col-12 mb-50">

                <!-- Post Block Wrapper Start -->
                <div class="post-block-wrapper">

                    <!-- Post Block Head Start -->
                    <div class="head">

                        <!-- Title -->
                        <h4 class="title">@if(session()->get('language') == 'bangla') কপিরাইট ট্রিক আইটি ওয়ার্ল্ড @else COPYRIGHT TRICK IT WORLD @endif</h4>

                    </div><!-- Post Block Head End -->

                    <!-- Post Block Body Start -->
                    <div class="body">
                        @php
                            $custrom_page = App\Models\CustromPage::where('id', 1)->first();
                        @endphp
                        <div class="contact-info row">

                            <div class="col-md-12">
                                {!! $custrom_page->tiw_copyright !!}

                            </div>

                        </div>

                    </div><!-- Post Block Body End -->

                </div><!-- Post Block Wrapper End -->

            </div>

            <!-- Sidebar Start -->
            <div class="col-lg-4 col-12 mb-50">
                <div class="row">

                    <!-- Single Sidebar Social Join Start -->
                    @include('frontend.side_widget.social_join')
                    <!-- Single Sidebar Social Join End -->

                    <!-- Single Sidebar Mid Ads 370 * 451  Start -->
                    @include('frontend.side_widget.mid_ads')
                    <!-- Single Sidebar Mid Ads 370 * 451  End -->

                </div>
            </div><!-- Sidebar End -->

        </div><!-- Feature Post Row End -->

    </div>
</div><!-- Post Section End -->
@endsection
