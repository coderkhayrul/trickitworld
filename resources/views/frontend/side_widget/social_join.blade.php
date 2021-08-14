<div class="single-sidebar col-lg-12 col-md-6 col-12">

    <!-- Sidebar Block Wrapper -->
    <div class="sidebar-block-wrapper">

        <!-- Sidebar Block Head Start -->
        <div class="head feature-head">

            <!-- Title -->
            <h4 class="title">@if (session()->get('language') == 'bangla')আমাদের সাথে যোগ দান @else
                JOIN US ON @endif </h4>

        </div><!-- Sidebar Block Head End -->
        @php
            $admin = App\Models\Admin::where('id', 1)->first();
        @endphp
        <!-- Sidebar Block Body Start -->
        <div class="body">

            <div class="sidebar-social-follow">
                <div>
                    <a target="_blank" href="{{ $admin->facebook_url }}" class="facebook">
                        <i class="fa fa-facebook"></i>
                        <h3>40,583</h3>
                        <span>Fans</span>
                    </a>
                </div>
                <div>
                    <a target="_blank" href="{{ $admin->youtube_url }}" class="google-plus">
                        <i class="fa fa-google-plus"></i>
                        <h3>36,857</h3>
                        <span>Followers</span>
                    </a>
                </div>
                <div>
                    <a target="_blank" href="{{ $admin->twitter_url }}" class="twitter">
                        <i class="fa fa-twitter"></i>
                        <h3>50,883</h3>
                        <span>Followers</span>
                    </a>
                </div>
                <div>
                    <a target="_blank" href="{{ $admin->pinterest_url }}" class="dribbble">
                        <i class="fa fa-dribbble"></i>
                        <h3>4,743</h3>
                        <span>Followers</span>
                    </a>
                </div>
            </div>

        </div><!-- Sidebar Block Body End -->

    </div>

</div>
