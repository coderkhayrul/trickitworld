<div class="single-sidebar col-lg-12 col-md-6 col-12">

    <!-- Single Sidebar -->
    <div class="single-sidebar">

        <!-- Sidebar Block Wrapper -->
        <div class="sidebar-block-wrapper">

            <!-- Sidebar Block Head Start -->
            <div class="head education-head">

                <!-- Tab List -->
                <div class="sidebar-tab-list education-sidebar-tab-list nav">
                    <a class="active" data-toggle="tab" href="#latest-news">@if(session()->get('language') == 'bangla') সর্বশেষ পোস্ট @else LATEST POST
                        @endif</a>
                    <a data-toggle="tab" href="#popular-news">@if (session()->get('language') ==
                        'bangla') জনপ্রিয় পোস্ট @else POPULAR POST @endif</a>
                </div>

            </div><!-- Sidebar Block Head End -->

            <!-- Sidebar Block Body Start -->
            <div class="body">
                @php
                $posts = App\Models\Product::latest()->orderBy('id', 'DESC')->limit(5)->get();
                @endphp
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="latest-news">
                        @foreach ($posts as $post)
                        <!-- Small Post Start -->
                        <div class="post post-small post-list education-post post-separator-border">
                            <div class="post-wrap">

                                <!-- Image -->
                                <a class="image" href="{{ route('home.product.show',$post->slug_en) }}"><img
                                        src="{{ asset($post->thambnail_image) }}" alt="post"></a>

                                <!-- Content -->
                                <div class="content">

                                    <!-- Title -->
                                    <h5 class="title">
                                        <a href="{{ route('home.product.show',$post->slug_en) }}">
                                            @if(session()->get('language') == 'bangla')
                                            {{ Str::limit($post->name_ban, 50, $end='...') }} @else
                                            {{ Str::limit($post->name_en, 50, $end='...') }}
                                            @endif
                                        </a></h5>

                                    <!-- Meta -->
                                    <div class="meta fix">
                                        <span class="meta-item date"><i
                                                class="fa fa-clock-o"></i>{{ Carbon\Carbon::parse($post->created_at)->diffForHumans() }}</span>
                                    </div>

                                </div>

                            </div>
                        </div><!-- Small Post End -->
                        @endforeach
                    </div>

                    <div class="tab-pane fade" id="popular-news">
                        @foreach ($popularpost as $post)
                        <!-- Small Post Start -->
                        <div class="post post-small post-list education-post post-separator-border">
                            <div class="post-wrap">

                                <!-- Image -->
                                <a class="image" href="{{ route('home.product.show',$post->slug_en) }}"><img
                                        src="{{ asset($post->thambnail_image) }}"
                                        alt="post"></a>

                                <!-- Content -->
                                <div class="content">

                                    <!-- Title -->
                                    <h5 class="title"><a href="{{ route('home.product.show',$post->slug_en) }}">@if(session()->get('language') == 'bangla') {{ $post->name_ban }} @else {{ $post->name_en }} @endif</a></h5>

                                    <!-- Meta -->
                                    <div class="meta fix">
                                        <span class="meta-item date"><i class="fa fa-clock-o"></i> {{ Carbon\Carbon::parse($post->created_at)->diffForHumans() }}</span>
                                    </div>

                                </div>

                            </div>
                        </div><!-- Small Post End -->
                        @endforeach

                    </div>
                </div>

            </div><!-- Sidebar Block Body End -->

        </div>

    </div>

</div>
