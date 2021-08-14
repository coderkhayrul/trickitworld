@extends('admin.admin_master')

@section('title')
Admin Panel || Dashboard
@endsection

@section('content')

<!-- Total Post Start -->
<div class="col-12 col-sm-6 col-xl-4 mb-4">
    <div class="card border-light shadow-sm">
        <div class="card-body">
            <div class="row d-block d-xl-flex align-items-center">
                <div
                    class="col-12 col-xl-5 text-xl-center mb-3 mb-xl-0 d-flex align-items-center justify-content-xl-center">
                    <div class="icon icon-shape icon-md icon-shape-blue rounded mr-4 mr-sm-0">
                        <span class="fas fa-dumpster-fire"></span></div>
                    <div class="d-sm-none">
                        <h2 class="h5">Total Post</h2>
                        <h3 class="mb-1">{{ count($posts) }}</h3>
                    </div>
                </div>
                <div class="col-12 col-xl-7 px-xl-0">
                    <div class="d-none d-sm-block">
                        <h2 class="h5">Total Post</h2>
                        <h3 class="mb-1">{{ count($posts) }}</h3>
                    </div>
                    <small>Active
                        <span class="icon icon-small">
                            <span class="fas fa-check text-success"></span>
                        </span> {{ count($activePosts) }}</small>
                    <br>
                    <small>Inactive
                        <span class="icon icon-small text-danger">
                            <span class="fas fa-times"></span>
                        </span> {{ count($inActivePosts) }}</small>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- Total Post End -->
<!-- Total Category Start -->
<div class="col-12 col-sm-6 col-xl-4 mb-4">
    <div class="card border-light shadow-sm">
        <div class="card-body">
            <div class="row d-block d-xl-flex align-items-center">
                <div
                    class="col-12 col-xl-5 text-xl-center mb-3 mb-xl-0 d-flex align-items-center justify-content-xl-center">
                    <div class="icon icon-shape icon-md icon-shape-secondary rounded mr-4 mr-sm-0">
                        <span class="fas fa-clipboard-list"></span></div>
                    <div class="d-sm-none">
                        <h2 class="h5">Total Category</h2>
                        <h3 class="mb-1">{{ count($categories) }}</h3>
                    </div>
                </div>
                <div class="col-12 col-xl-7 px-xl-0">
                    <div class="d-none d-sm-block">
                        <h2 class="h5">Total Category</h2>
                        <h3 class="mb-1">{{ count($categories) }}</h3>
                    </div>
                    <small>Active
                        <span class="icon icon-small">
                            <span class="fas fa-check text-success"></span>
                        </span> {{ count($activeCategory) }}</small>
                    <br>
                    <small>Inactive
                        <span class="icon icon-small text-danger">
                            <span class="fas fa-times"></span>
                        </span> {{ count($InActiveCategory) }}</small>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- Total Category End -->
<!-- Total Contact Start -->
<div class="col-12 col-sm-6 col-xl-4 mb-4">
    <div class="card border-light shadow-sm">
        <div class="card-body">
            <div class="row d-block d-xl-flex align-items-center">
                <div
                    class="col-12 col-xl-5 text-xl-center mb-3 mb-xl-0 d-flex align-items-center justify-content-xl-center">
                    <div class="icon icon-shape icon-md icon-shape-gray-700 rounded mr-4 mr-sm-0">
                        <span class="fas fa-mail-bulk"></span></div>
                    <div class="d-sm-none">
                        <h2 class="h5">User Message</h2>
                        <h3 class="mb-1">{{ count($contacts) }}</hh3>
                    </div>
                </div>
                <div class="col-12 col-xl-7 px-xl-0">
                    <div class="d-none d-sm-block">
                        <h2 class="h5">User Message</h2>
                        <h3 class="mb-1">{{ count($contacts) }}</h3>
                    </div>
                    <small>Seen
                        <span class="icon icon-small">
                            <span class="fas fa-check text-success"></span>
                        </span> {{ count($activeContact) }}</small>
                    <br>
                    <small>Unseen
                        <span class="icon icon-small text-danger">
                            <span class="fas fa-times"></span>
                        </span> {{ count($inActiveContact) }}</small>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- Total Contact End -->


<div class="col-12 col-sm-6 col-xl-4 mb-4">
    <div class="card border-light shadow-sm">
        <div class="card-body">
            <div class="row d-block d-xl-flex align-items-center">
                <div
                    class="col-12 col-xl-5 text-xl-center mb-3 mb-xl-0 d-flex align-items-center justify-content-xl-center">
                    <div class="ct-chart-traffic-share ct-golden-section ct-series-a"></div>
                </div>
                <div class="col-12 col-xl-7 px-xl-0">
                    <h2 class="h5 mb-3">Traffic Share</h2>
                    <h6 class="font-weight-normal text-gray"><span
                            class="icon w-20 icon-xs icon-secondary mr-1"><span
                                class="fas fa-desktop"></span></span> Desktop <a href="#" class="h6">60%</a>
                    </h6>
                    <h6 class="font-weight-normal text-gray"><span
                            class="icon w-20 icon-xs icon-primary mr-1"><span
                                class="fas fa-mobile-alt"></span></span> Mobile Web <a href="#"
                            class="h6">30%</a></h6>
                    <h6 class="font-weight-normal text-gray"><span
                            class="icon w-20 icon-xs icon-tertiary mr-1"><span
                                class="fas fa-tablet-alt"></span></span> Tablet Web <a href="#"
                            class="h6">10%</a></h6>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
