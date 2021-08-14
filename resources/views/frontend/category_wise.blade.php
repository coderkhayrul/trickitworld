@extends('frontend.fronted_master')

@section('title')
{{ $category->name_en }} - TrickitWorld
@endsection

@section('custrom_metadata')
<meta name="description" content="{{ $category->description_en }}" />
@endsection

@section('custrom_style')
<link rel="canonical" href="{{ url('category/'.$category->slug_en) }}" />
@endsection

@section('content')
    <!-- Page Banner Section Start -->
    <div class="page-banner-section section mt-30 mb-30">
        <div class="container">
            <div class="row row-1">

                <!-- Page Banner Start -->
                <div class="col-lg-8 col-12">
                    <div class="page-banner" style="background-image: url({{ asset('default') }}/category_image.png)">
                        <h2>@if(session()->get('language') == 'bangla') ক্যাটাগরি @else Category @endif: <span class="category-education">@if(session()->get('language') == 'bangla') {{ $category->name_ban }} @else {{ $category->name_en }}  @endif</span></h2>
                        <ol class="page-breadcrumb">
                            <li><a href="{{ url('/') }}">@if(session()->get('language') == 'bangla') হোম @else Home @endif</a></li>
                            <li class="active">@if(session()->get('language') == 'bangla') {{ $category->name_ban }} @else {{ $category->name_en }} @endif</li>
                        </ol>
                        <p> @if(session()->get('language') == 'bangla') {{ $category->description_ban }} @else {{ $category->description_en }}@endif </p>
                    </div>
                </div>
                <!-- Page Banner End -->
                <!-- 399 * 294 Banner Ads Start -->
                @include('frontend.side_widget.cat_ads')

                <!-- 399 * 294 Banner Ads End -->
            </div>
        </div>
    </div>
    <!-- Page Banner Section End -->

    <!-- Post Section Start -->
    <div class="post-section section mt-50">
        <div class="container">

            <!-- Feature Post Row Start -->
            <div class="row">

                <div class="col-lg-8 col-12 mb-50">

                    <!-- Post Block Wrapper Start -->
                    <div class="post-block-wrapper">

                        <!-- Post Block Body Start -->
                        <div class="body">
                            <div class="row mb-4">

                                @forelse ($productByCategory as $post)
                                <!-- Post Start -->
                                <div class="post education-post post-separator-border col-md-6 col-12">
                                    <div class="post-wrap">

                                        <!-- Image -->
                                        <a class="image" href="{{ route('home.product.show', $post->slug_en) }}"><img src="{{ asset($post->thambnail_image) }}" alt="post"></a>

                                        <!-- Content -->
                                        <div class="content">

                                            <!-- Title -->
                                            <h4 class="title"><a href="{{ route('home.product.show', $post->slug_en) }}">@if(session()->get('language') == 'bangla') {{ Str::limit($post->name_ban, 45, $end='.') }} @else {{ Str::limit($post->name_en, 45, $end='.') }} @endif</a></h4>

                                            <!-- Meta -->
                                            <div class="meta fix">
                                                <a href="#" class="meta-item author"><i class="fa fa-user"></i>@if(session()->get('language') == 'bangla') খায়রুল ইসলাম শান্ত @else Khayrul Islam Shanto @endif</a>
                                                <span class="meta-item date"><i class="fa fa-clock-o"></i>{{ Carbon\Carbon::parse($post->created_at)->diffForHumans() }}</span>
                                            </div>

                                            <!-- Description -->
                                            <p>@if(session()->get('language') == 'bangla') {{ $post->short_description_ban }} @else {{ $post->short_description_en }} @endif</p>

                                            <!-- Read More -->
                                            <a href="{{ route('home.product.show', $post->slug_en) }}" class="read-more">@if(session()->get('language') == 'bangla') পড়া চালিয়ে যান @else continue reading @endif</a>

                                        </div>

                                    </div>
                                </div>
                                <!-- Post End -->
                                @empty
                                <h1 class="text-primary"> No Post Found </h1>
                                @endforelse
                            </div>
                            <!-- Custrom Pagination Start -->
                            {{ $productByCategory->links('frontend.common.custrom_paginate') }}
                            <!-- Custrom Pagination End -->
                        </div>
                        <!-- Post Block Body End -->

                    </div><!-- Post Block Wrapper End -->

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
