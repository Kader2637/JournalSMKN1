<header class="app-header">
    <nav class="navbar navbar-expand-xl navbar-light container-fluid px-0">
        <ul class="navbar-nav">
            <li class="nav-item d-block d-xl-none">
                <a class="nav-link sidebartoggler ms-n3" id="sidebarCollapse" href="javascript:void(0)">
                    <i class="ti ti-menu-2"></i>
                </a>
            </li>
            <li class="nav-item d-none d-xl-block">
                <div class="d-flex justify-content-header">
                    <div class="">
                        <a href="javascript:void(0)" class="text-nowrap nav-link">
                            <img src="{{ asset('smk.png') }}" class="dark-logo" width="55" alt="" />
                            <img src="{{ asset('smk.png') }}" class="light-logo" width="55" alt="" />
                        </a>
                    </div>
                    <div class="">
                        <h5 class="mt-4" style="font-weight: 700">
                            SMKN 1 KRAKSAAN
                        </h5>
                    </div>
                </div>
            </li>
        </ul>
        <div class="d-block d-xl-none">
            <a href="javascript:void(0)" class="text-nowrap nav-link">
                <img src="{{ asset('smk.png') }}"
                    width="180" alt="" />
            </a>
        </div>
        <button class="navbar-toggler p-0 border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="p-2">
                <i class="ti ti-dots fs-7"></i>
            </span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <div class="d-flex align-items-center justify-content-between px-0 px-xl-8">
                <a href="javascript:void(0)"
                    class="nav-link round-40 p-1 ps-0 d-flex d-xl-none align-items-center justify-content-center"
                    type="button" data-bs-toggle="offcanvas" data-bs-target="#mobilenavbar"
                    aria-controls="offcanvasWithBothOptions">
                    {{-- <i class="ti ti-align-justified fs-7"></i> --}}
                </a>
                <style>
                    .myElement {
                        background: linear-gradient(to right, #ffffff,  rgba(200, 200, 200, 0.5));
                    }
                </style>
                <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-center">
                    <li class="nav-item dropdown">
                        <a class="nav-link pe-0" href="javascript:void(0)" id="drop1" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <div class="d-flex align-items-center">
                                <div class="user-profile-img">
                                    <img src="../../assets/dist/images/profile/user-1.jpg" class="rounded-circle"
                                        width="50" height="50" alt="" />
                                </div>
                            </div>
                        </a>
                        <div class="dropdown-menu content-dd dropdown-menu-end dropdown-menu-animate-up"
                            aria-labelledby="drop1">
                            <div class="profile-dropdown position-relative" data-simplebar>
                                <div class="py-3 px-7 pb-0">
                                    <h5 class="mb-0 fs-5 fw-semibold">User Profile</h5>
                                </div>
                                <div class="d-flex align-items-center py-9 mx-7 border-bottom">
                                    <img src="../../assets/dist/images/profile/user-1.jpg" class="rounded-circle"
                                    width="80" height="80" alt="" />
                                    <div class="ms-3">
                                        <span class="ms-3">
                                            <h5 class="mb-1 fs-3">{{ auth()->user()->name }}</h5>
                                            <span
                                                class="mb-1 d-block text-dark">RPL</span>
                                            <p class="mb-0 d-flex text-dark align-items-center gap-2">
                                                <i class="ti ti-mail fs-4"></i> {{ auth()->user()->email }}
                                            </p>
                                        </span>
                                    </div>
                                </div>
                                <div class="d-grid py-4 px-7 pt-8">
                                    <a class="btn btn-outline-primary" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                                        <i class="mdi mdi-logout text-muted fs-16 align-middle me-1"></i>
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
