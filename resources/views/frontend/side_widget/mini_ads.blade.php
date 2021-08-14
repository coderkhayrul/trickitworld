@php
$custrom_ads = App\Models\CustromAds::first();
@endphp

<div class="single-sidebar col-lg-12 col-md-6 col-12">
    <div class="sidebar-banner">
        <!-- Sidebar Banner -->
        @if($custrom_ads->sami_sidebar_ads != NULL) {!! $custrom_ads->sami_sidebar_ads !!} @else <img src="{{ asset('frontend') }}/img/banner/sidebar-banner-2.jpg" alt="Sidebar Banner"> @endif
    </div>
</div>
