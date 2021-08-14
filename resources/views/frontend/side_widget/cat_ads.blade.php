@php
    $custrom_ads = App\Models\CustromAds::first();
@endphp

<div class="page-banner-image col-lg-4 col-12 d-none d-lg-block">
    @if($custrom_ads->top_sidebar_ads != NULL) {!! $custrom_ads->top_sidebar_ads !!} @else <img src="{{ asset('frontend') }}/img/banner/page-banner-sports.jpg" alt="Page Banner Image"> @endif


</div>
