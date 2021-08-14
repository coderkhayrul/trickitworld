@php
$prefix = Request::route()->getPrefix();
$route = Route::current()->getName();
@endphp


<nav class="navbar navbar-dark navbar-theme-primary px-4 col-12 d-md-none">
    <a class="navbar-brand mr-lg-5" href="{{ url('/admin') }}">
        <img class="navbar-brand-dark" src="{{ asset('default/admin/apple_favicon_white.png') }}" alt="Website logo" />
    </a>
    <div class="d-flex align-items-center">
        <button class="navbar-toggler d-md-none collapsed" type="button" data-toggle="collapse"
            data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
</nav>
@php
    $admin = App\Models\User::where('id', Auth::id())->first();
@endphp
<nav id="sidebarMenu" class="sidebar d-md-block bg-primary text-white collapse" data-simplebar>
    <div class="sidebar-inner px-4 pt-3">
        <div
            class="user-card d-flex d-md-none align-items-center justify-content-between justify-content-md-center pb-4">
            <div class="d-flex align-items-center">
                <div class="user-avatar lg-avatar mr-4">
                    <img src="{{ $admin->profile_image == NULL ? asset('default/admin/apple_favicon_dark.png') : asset($admin->profile_image) }}"
                        class="card-img-top rounded-circle border-white" alt="Bonnie Green">
                </div>
                <div class="d-block">
                    <h2 class="h6">{{ Auth::user()->name }}</h2>
                    <a href="{{ route('admin.logout') }}" class="btn btn-secondary text-dark btn-xs"><span
                            class="mr-2"><span class="fas fa-sign-out-alt"></span></span>Sign Out</a>
                </div>
            </div>
            <div class="collapse-close d-md-none">
                <a href="#sidebarMenu" class="fas fa-times" data-toggle="collapse" data-target="#sidebarMenu"
                    aria-controls="sidebarMenu" aria-expanded="true" aria-label="Toggle navigation"></a>
            </div>
        </div>
        <ul class="nav flex-column">
            <!-- Dashboard Start -->
            <li class="nav-item {{ ($route == 'admin.dashboard')? 'active' : '' }}">
                <a href="{{ url('/admin') }}" class="nav-link">
                    <span class="sidebar-icon"><span class="fas fa-chart-pie"></span></span>
                    <span>Overview</span>
                </a>
            </li>
            <!-- Dashboard End -->
            <!-- Category Start -->
            <li class="nav-item {{ request()->is('admin/category*') ? 'active' : '' }}">
                <a href="{{ route('category.index') }}" class="nav-link">
                    <span class="sidebar-icon"><span class="fas fa-th-list"></span></span>
                    <span>Categories</span>
                </a>
            </li>
            <!-- Category End -->
            <!-- Product Start -->
            <li class="nav-item {{ request()->is('admin/product*') ? 'active' : '' }}">
                <a href="{{ route('product.index') }}" class="nav-link">
                    <span class="sidebar-icon"><span class="fas fa-box"></span></span>
                    <span>Product</span>
                </a>
            </li>
            <!-- Product End -->
            <li class="nav-item {{ request()->is('admin/setting*') ? 'active' : '' }}">
                <span class="nav-link  collapsed  d-flex justify-content-between align-items-center"
                    data-toggle="collapse" data-target="#submenu-app">
                    <span>
                        <span class="sidebar-icon"><span class="fas fa-cogs"></span></span>
                        Advanced Setting
                    </span>
                    <span class="link-arrow"><span class="fas fa-chevron-right"></span></span>
                </span>
                <div class="multi-level collapse " role="list" id="submenu-app" aria-expanded="false">
                    <ul class="flex-column nav">
                        <li class="nav-item {{ ($route == 'setting.index')? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('setting.index') }}">
                                <span class="sidebar-icon"><span class="fas fa-cog"></span></span>
                                <span>Setting</span>
                            </a>
                        </li>
                        <li class="nav-item {{ ($route == 'admin.setting.social')? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('admin.setting.social') }}">
                                <span class="sidebar-icon"><span class="fas fa-share-alt-square"></span></span>
                                <span>Social Setting</span>
                            </a>
                        </li>
                        <li class="nav-item {{ ($route == 'admin.setting.contact')? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('admin.setting.contact') }}">
                                <span class="sidebar-icon"><span class="fas fa-info-circle"></span></span>
                                <span>Contact Setting</span>
                            </a>
                        </li>
                        <li class="nav-item {{ ($route == 'admin.setting.seo')? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('admin.setting.seo') }}">
                                <span class="sidebar-icon"><span class="fas fa-leaf"></span></span>
                                <span>Seo Tools</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li role="separator" class="dropdown-divider mt-4 mb-3 border-black"></li>

            <li class="nav-item {{ ($route == 'ads.index')? 'active' : '' }}">
                <a href="{{ route('ads.index') }}" class="nav-link d-flex align-items-center">
                    <span class="sidebar-icon">
                        <i class="fab fa-buysellads text-danger"></i>
                    </span>
                    <span>Custrom Ads Setting</span>
                </a>
            </li>
            <li class="nav-item {{ request()->is('admin/page*') ? 'active' : '' }}">
                <a href="{{ route('page.index') }}" class="nav-link d-flex align-items-center">
                    <span class="sidebar-icon">
                        <i class="fas fa-pager"></i>
                    </span>
                    <span>Page Setting</span>
                </a>
            </li>

            <li class="nav-item {{ request()->is('admin/contact*') ? 'active' : '' }}">
                <a href="{{ route('all.contact') }}" class="nav-link d-flex align-items-center">
                    <span class="sidebar-icon">
                        <i class="fas fa-inbox"></i>
                    </span>
                    <span>Contact Message</span>
                </a>
            </li>
        </ul>
    </div>
</nav>
