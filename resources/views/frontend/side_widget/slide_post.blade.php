<div class="single-sidebar col-lg-12 col-md-6 col-12">

    <!-- Sidebar Block Wrapper -->
    <div class="sidebar-block-wrapper">

        <!-- Sidebar Block Head Start -->
        <div class="head life-style-head">

            <!-- Title -->
            <h4 class="title">@if (session()->get('language') == 'bangla') {{ $skip_category->name_ban }}  @else {{ $skip_category->name_en }} @endif</h4>

        </div>
        <!-- Sidebar Block Head End -->

        <!-- Sidebar Block Body Start -->
        <div class="body">

            <!-- Sidebar Post Slider Start -->
            <div class="sidebar-post-carousel post-block-carousel life-style-post-carousel">

                <!-- Post Start -->
                @foreach ($skip_products as $product)
                <div class="post life-style-post">
                    <div class="post-wrap">

                        <!-- Image -->
                        <a class="image" href="@if(session()->get('language') == 'bangla') {{ route('home.product.show',$product->slug_en) }} @else {{ route('home.product.show',$product->slug_en) }} @endif "><img src="{{ asset($product->thambnail_image) }}" alt="post"></a>

                        <!-- Content -->
                        <div class="content">

                            <!-- Title -->
                            <h4 class="title"><a href="@if(session()->get('language') == 'bangla') {{ route('home.product.show',$product->slug_en) }} @else {{ route('home.product.show',$product->slug_en) }} @endif ">@if (session()->get('language') == 'bangla') {{ $product->name_ban }} @else {{ $product->name_en }} @endif</a></h4>

                            <!-- Read More Button -->
                            <a href="@if(session()->get('language') == 'bangla') {{ route('home.product.show',$product->slug_en) }} @else {{ route('home.product.show',$product->slug_en) }} @endif " class="read-more">@if(session()->get('language') == 'bangla') পড়া চালিয়ে যান @else continue reading @endif </a>

                        </div>

                    </div>
                </div><!-- Post End -->
                @endforeach
            </div><!-- Sidebar Post Slider End -->

        </div><!-- Sidebar Block Body End -->

    </div>

</div>
