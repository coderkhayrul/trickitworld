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
            <iframe
                src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Ftrickitworld%2F&tabs=timeline&width=300&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=422059265828054"
                width="400" height="400" style="border:none;overflow:hidden" scrolling="no" frameborder="0"
                allowfullscreen="true"
                allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
        </div><!-- Sidebar Block Body End -->

    </div>

</div>
