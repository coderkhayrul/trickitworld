@php
$custrom_ads = App\Models\CustromAds::first();
@endphp

<div class="row mb-50">
    <div class="col-12">
        <div class="post-middle-banner">
            @if($custrom_ads->footer_ads != NULL) {!! $custrom_ads->footer_ads !!} @else <img src="{{ asset('frontend') }}/img/banner/post-middle-1.jpg" alt="Footer Banner Ads"> @endif
        </div>
    </div>
</div>
