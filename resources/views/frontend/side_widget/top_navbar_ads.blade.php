@php
    $custrom_ads = App\Models\CustromAds::first();
@endphp
<div class="header-banner col-md-8 col-12">
    <div class="banner">
        <a href="#">@if($custrom_ads->header_ads != NULL) {!! $custrom_ads->header_ads !!} @else <img src="{{ asset('frontend') }}/img/banner/header-banner-1.jpg" alt="Header Banner"> @endif</a>
    </div>
</div>
