
<div class="footer-bottom-section section bg-dark">
    <div class="container">
        <div class="row">
            @php
                $admin_settings = App\Models\Admin::find(1);
            @endphp
            <!-- Copyright Start -->
            <div class="copyright text-left col">
                <p>@if (session()->get('language') == 'bangla'){{ $admin_settings->copyright_text_ban }} @else {{ $admin_settings->copyright_text_en }} @endif</p>
            </div><!-- Copyright End -->

        </div>
    </div>
</div>
