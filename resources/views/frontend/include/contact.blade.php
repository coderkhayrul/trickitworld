@extends('frontend.fronted_master')

@section('title')
Contact - Trick it World
@endsection

@section('custrom_style')
<link rel="canonical" href="{{ url('contact/') }}" />
@endsection

@section('content')
    <!-- Page Banner Section Start -->
    <div class="page-banner-section section mt-30 mb-30">
        <div class="container">
            <div class="row row-1">

                <!-- Page Banner Start -->
                <div class="col-12">
                    <div class="page-banner" style="background-image: url({{ asset('default') }}/home/banner/contactus.png)">
                        <h2>@if(session()->get('language') == 'bangla') যোগাযোগ করুন @else Contact us @endif</h2>
                        <ol class="page-breadcrumb">
                            <li><a href="#">@if(session()->get('language') == 'bangla') হোম @else  Home @endif </a></li>
                            <li class="active">@if(session()->get('language') == 'bangla') যোগাযোগ করুন @else Contact us @endif </li>
                        </ol>
                    </div>
                </div><!-- Page Banner End -->

            </div>
        </div>
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
                            <h4 class="title">@if(session()->get('language') == 'bangla') যোগাযোগের তথ্য @else  Contact Information @endif</h4>

                        </div><!-- Post Block Head End -->

                        <!-- Post Block Body Start -->
                        <div class="body">

                            <div class="contact-info row">

                                <div class="single-contact text-center col-md-4">
                                    <i class="fa fa-home"></i>
                                    <p>@if(session()->get('language') == 'bangla') আড়াইহাজার, নারায়ণগঞ্জ, ঢাকা-১৪৫০, বাংলাদেশ @else Araihazar, Narayangonj, Dhaka-1450, Bangladesh @endif </p>
                                </div>

                                <div class="single-contact text-center col-md-4">
                                    <i class="fa fa-envelope-open"></i>
                                    <p>trickitworld@gmail.com <br>khayrulshanto@gmail.com</p>
                                </div>

                                <div class="single-contact text-center col-md-4">
                                    <i class="fa fa-headphones"></i>
                                    @if(session()->get('language') == 'bangla') <p>(+৮৮০ ১৩০ ৩১৩২ ০৬৭) <br>(+৮৮০ ১৮৩ ৫০৬১ ৯৬৮)</p> @else <p>(+880 183 5061 968) <br>(+880 130 313 2067)</p> @endif
                                </div>

                            </div>

                        </div><!-- Post Block Body End -->

                        <!-- Post Block Head Start -->
                        <div class="head">

                            <!-- Title -->
                            <h4 class="title">@if(session()->get('language') == 'bangla') আমাদের একটি বার্তা পাঠান @else  Send us a Message @endif </h4>

                        </div><!-- Post Block Head End -->

                        <!-- Post Block Body Start -->
                        <div class="body">
                            @if(Session::has('message'))
                            <p class="alert alert-info">@if(session()->get('language') == 'bangla') আমাদের সাথে যোগাযোগ করার জন্য ধন্যবাদ, আমরা দ্রুত আপনার সাথে যোগাযোগ করবো।  @else {{ Session::get('message') }} @endif</p>
                            @endif
                            <form action="{{ route('sent.message') }}" method="post">
                                @csrf
                                <div class="contact-form row">

                                    <div class="col-md-6 col-12 mb-20">
                                        <label for="name">@if(session()->get('language') == 'bangla') নাম @else Name @endif  <sup>*</sup></label>
                                        <input class="form-control @error('name') is-invalid @enderror" type="text" name="name">

                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                    <div class="col-md-6 col-12 mb-20">
                                        <label for="email">@if(session()->get('language') == 'bangla') ইমেইল @else Email @endif  <sup>*</sup></label>
                                        <input class="form-control @error('email') is-invalid @enderror" type="email" name="email">

                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                    <div class="col-12 mb-20">
                                        <label for="message">@if(session()->get('language') == 'bangla') বার্তা @else Message @endif <sup>*</sup></label>
                                        <textarea id="message" name="message"></textarea>
                                    </div>

                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary">@if(session()->get('language') == 'bangla') বার্তা পাঠান @else  Sent Message @endif </button>
                                    </div>

                                </div>
                            </form>
                        </div><!-- Post Block Body End -->

                        <!-- Post Block Head Start -->
                        <div class="head">

                            <!-- Title -->
                            <h4 class="title">@if(session()->get('language') == 'bangla')মানচিত্রে আমাদের খুঁজুন @else  find us on map @endif</h4>

                        </div><!-- Post Block Head End -->

                        <!-- Post Block Body Start -->
                        <div class="body">

                            <div class="contact-map-wrap">
                                <div id="contact-map"></div>
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

                        <!-- Single Sidebar Newsletter Start -->
                        @include('frontend.side_widget.newsletter')
                        <!-- Single Sidebar Newsletter End -->

                    </div>
                </div><!-- Sidebar End -->

            </div><!-- Feature Post Row End -->

        </div>
    </div><!-- Post Section End -->
@endsection
