<nav class="navbar navbar-top navbar-expand navbar-dashboard navbar-dark pl-0 pr-2 pb-0">
    <div class="container-fluid px-0">
        <div class="d-flex justify-content-between w-100" id="navbarSupportedContent">
            <div class="d-flex">
                <!-- Search form -->

            </div>
            <!-- Navbar links -->
            <ul class="navbar-nav align-items-center">
                @php
                $admin = App\Models\User::where('status', 1)->where('id', Auth::id())->first();
                @endphp
                <li class="nav-item dropdown">
                    <a class="nav-link pt-1 px-0" href="#" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <div class="media d-flex align-items-center">
                            <img class="user-avatar md-avatar rounded-circle" alt="Admin Image"
                                src="{{ $admin->profile_image == NULL ? asset('default/admin/favicon_dark.png') : asset($admin->profile_image) }}">
                            <div class="media-body ml-2 text-dark align-items-center d-none d-lg-block">
                                <span class="mb-0 font-small font-weight-bold">{{ Auth::user()->name }}</span>
                            </div>
                        </div>
                    </a>
                    <div class="dropdown-menu dashboard-dropdown dropdown-menu-right mt-2">
                        <a class="dropdown-item font-weight-bold" href="{{ route('profile.index') }}"><span
                                class="far fa-user-circle"></span>My Profile</a>
                        <div role="separator" class="dropdown-divider"></div>
                        <a class="dropdown-item font-weight-bold" href="{{ route('admin.logout') }}"><span
                                class="fas fa-sign-out-alt text-danger"></span>Logout</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>
