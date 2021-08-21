@extends('frontend.fronted_master')

@section('title')
{{ $post->name_en }} - TrickitWorld
@endsection
@section('custrom_metadata')
<meta name="description" content="{{ $post->short_description_en }}" />
@endsection

@section('custrom_style')
<link rel="canonical" href="{{ url('post/'.$post->slug_en) }}" />
@endsection

@section('content')

<!-- Post Header Section Start -->
    <div class="post-header-section section mt-30 mb-30">
        <div class="container">
            <div class="row row-1">

                <!-- Page Banner Start -->
                <div class="col-12">
                    <div class="post-header" style="background-image: url({{ asset($post->banner_image) }})">

                        <!-- Title -->
                        <h3 class="title">@if(session()->get('language') == 'bangla') {{ $post->name_ban }} @else {{ $post->name_en }} @endif </h3>

                        <!-- Meta -->
                        <div class="meta fix">
                            <a href="{{ url('category/'.$post->category->slug_en) }}" class="meta-item category education">@if(session()->get('language') == 'bangla') {{ $post->category->name_ban }} @else {{ $post->category->name_en }} @endif</a>
                            <a href="#" class="meta-item author">
                                <img src="{{ asset('default/author_main.png') }}" alt="post author">
                                Khayrul Islam Shanto
                            </a>
                            <span class="meta-item date"><i class="fa fa-clock-o"></i>{{ Carbon\Carbon::parse($post->created_at)->diffForHumans() }}</span>
                            @if (!count($post->comment) == 0)
                            <a href="#" class="meta-item comments"><i class="fa fa-comments"></i>({{ count($post->comment) }})</a>
                            @endif
                        </div>

                    </div>
                </div><!-- Post Header Section End -->

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
                    <div class="post-block-wrapper mb-50">

                        <!-- Post Block Body Start -->
                        <div class="body">
                            <div class="row">

                                <div class="col-12">

                                    <!-- Single Post Start -->
                                    <div class="single-post">
                                        <div class="post-wrap">

                                            <!-- Content -->
                                            <div class="content">
                                                <!-- Description -->
                                                @if(session()->get('language') == 'bangla'){!! $post->long_description_ban !!} @else {!! $post->long_description_en !!} @endif
                                            </div>

                                            <div class="tags-social float-left">

                                                <div class="tags float-left">
                                                    <i class="fa fa-tags"></i>
                                                    <a href="{{ url('category/'.$post->category->slug_en) }}">@if(session()->get('language') == 'bangla') {!! $post->category->name_ban !!} @else {!! $post->category->name_en !!} @endif
                                                    </a>
                                                </div>
                                                <div class="float-right">
                                                    <!-- Go to www.addthis.com/dashboard to customize your tools -->
                                                    {{-- <div class="addthis_inline_share_toolbox_3n5p"></div> --}}
                                                </div>

                                            </div>

                                        </div>
                                    </div><!-- Single Post End -->

                                </div>

                            </div>
                        </div><!-- Post Block Body End -->

                    </div><!-- Post Block Wrapper End -->

                    <!-- Previous & Next Post Start -->
                    <div class="post-nav mb-50">
                        @if ($previous == NULL)
                        <a class="previous-post">
                            <span>previous post</span>
                            No More Previous Post
                        </a>
                        @else
                        <a href="{{ URL::to( 'post/'. $previous->slug_en ) }}" class="prev-post disabled"><span>@if(session()->get('language') == 'bangla') পূর্ববর্তী পোস্ট @else previous post @endif </span>
                            @if(session()->get('language') == 'bangla') {{ $previous->name_ban }} @else {{ $previous->name_en }} @endif
                        </a>
                        @endif


                        @if ($next == NULL)
                        <a class="next-post">
                            <span>@if(session()->get('language') == 'bangla') পরের পোস্ট @else next post @endif </span>
                            @if(session()->get('language') == 'bangla') আর কোনও নেক্সট পোস্ট নেই @else No More Next Post @endif
                        </a>
                        @else
                        <a href="{{ URL::to( 'post/'. $next->slug_en ) }}" class="next-post"><span>@if(session()->get('language') == 'bangla') পরের পোস্ট @else next post @endif</span>
                            @if(session()->get('language') == 'bangla') {{ $next->name_ban }} @else {{ $next->name_en }} @endif
                        </a>
                        @endif
                    </div><!-- Previous & Next Post End -->

                    <!-- Post Block Wrapper Start -->
                    <div class="post-block-wrapper mb-50">

                        <!-- Post Block Head Start -->
                        <div class="head">

                            <!-- Title -->
                            <h4 class="title">@if(session()->get('language') == 'bangla') তুমি এটাও পছন্দ করতে পারো @else  You might also like! @endif</h4>

                        </div><!-- Post Block Head End -->

                        <!-- Post Block Body Start -->
                        <div class="body">

                            <div class="two-column-post-carousel column-post-carousel post-block-carousel row">
                                @foreach ($allposts as $sliderpost)
                                    <div class="col-md-6 col-12">

                                        <!-- Overlay Post Start -->
                                        <div class="post post-overlay hero-post">
                                            <div class="post-wrap">

                                                <!-- Image -->
                                                <div class="image"><img src="{{ asset($sliderpost->thambnail_image) }}" alt="post"></div>

                                                <!-- Category -->
                                                <a href="#" class="category politic">@if(session()->get('language') == 'bangla') {{$sliderpost->category->name_ban }} @else {{ $sliderpost->category->name_en }}@endif</a>

                                                <!-- Content -->
                                                <div class="content">

                                                    <!-- Title -->
                                                    <h4 class="title"><a href="@if(session()->get('language') == 'bangla') {{ route('home.product.show',$sliderpost->slug_en) }} @else {{ route('home.product.show',$sliderpost->slug_en) }} @endif ">@if(session()->get('language') == 'bangla') {{ Str::limit($sliderpost->name_ban, 40, $end='.') }} @else {{ Str::limit($sliderpost->name_en, 40, $end='.') }}@endif</a></h4>

                                                    <!-- Meta -->
                                                    <div class="meta fix">
                                                        <span class="meta-item date"><i class="fa fa-clock-o"></i>{{ Carbon\Carbon::parse($sliderpost->created_at)->diffForHumans() }}</span>
                                                    </div>

                                                </div>

                                            </div>
                                        </div><!-- Overlay Post End -->
                                    </div>
                                @endforeach
                            </div>

                        </div><!-- Post Block Body End -->

                    </div><!-- Post Block Wrapper End -->
                    <!-- Leave a Comment Start -->
                    <!-- Post Block Wrapper Start -->
                    <div class="post-block-wrapper">
                        <!-- Post Block Head Start -->
                        <div class="head">
                            <!-- Title -->
                            <h4 class="title">Leave a Comment</h4>
                        </div><!-- Post Block Head End -->
                        <!-- Post Block Body Start -->
                        <div class="body">
                            @if (Session::has('message'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ Session::get('message') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            @endif
                            <div class="post-comment-form">
                                <form action="{{ route('sent.contact') }}" class="row" method="post">
                                    @csrf
                                    <input type="hidden" name="post_id" value="{{ $post->id }}">
                                    <div class="col-md-6 col-12 mb-20">
                                        <label for="name">Name <sup>*</sup></label>
                                        <input value="{{old('name')}}" class="@error('name') is-invalid @enderror"name="name" type="text" id="name">
                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 col-12 mb-20">
                                        <label for="email">Email <sup>*</sup></label>
                                        <input value="{{old('email')}}" class="@error('email') is-invalid @enderror" name="email" type="text" id="email">
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="col-12 mb-20">
                                        <label for="message">Message <sup>*</sup></label>
                                        <textarea class="@error('message') is-invalid @enderror" name="message" id="message"></textarea>
                                        @error('message')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary">Submit Comment</button>
                                    </div>
                                </form>
                            </div>
                        </div><!-- Post Block Body End -->
                    </div>
                    <!-- Post Block Wrapper End -->
                    <!-- Leave a Comment Start -->
                </div>

                <!-- Sidebar Start -->
                <div class="col-lg-4 col-12 mb-50">
                    <div class="row">

                        <!-- Follow Us On Start -->
                        @include('frontend.side_widget.social_join')
                        <!-- Follow Us On End -->

                        <!-- Single Sidebar 370 * 451 Ads Start -->
                        @include('frontend.side_widget.mid_ads')
                        <!-- Single Sidebar 370 * 451 Ads End -->

                        <!-- 370 * 272 Ads Start -->
                        @include('frontend.side_widget.mini_ads')
                        <!-- 370 * 272 Ads End -->

                        <!-- Single Sidebar Subscribe Newsletter Start -->
                        {{-- @include('frontend.side_widget.newsletter') --}}
                        <!-- Single Sidebar Subscribe Newsletter Start -->

                    </div>
                </div><!-- Sidebar End -->

            </div><!-- Feature Post Row End -->

        </div>
    </div><!-- Post Section End -->
@endsection
