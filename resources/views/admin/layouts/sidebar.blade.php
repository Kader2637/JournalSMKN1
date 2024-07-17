<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div>
      <div class="brand-logo d-flex align-items-center justify-content-between">
        <div class="d-flex justify-content-header gap-2">
            <div class="">
                <a href="/" class="text-nowrap logo-img ">
                    <img src="{{ asset('smk.png') }}" class="dark-logo" width="55" alt="" />
                    <img src="{{ asset('smk.png') }}" class="light-logo" width="55" alt="" />
                </a>
            </div>
            <div class="mt-4">
                <h6  style="font-weight:700; color:black">
                    SMKN 1 KRAKSAAN
                </h6>
            </div>
        </div>
        <div class="close-btn d-lg-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
          <i class="ti ti-x fs-8 text-muted"></i>
        </div>
      </div>
      <!-- Sidebar navigation-->
      <nav class="sidebar-nav scroll-sidebar" data-simplebar>
        <ul id="sidebarnav">
          <!-- ============================= -->
          <!-- Home -->
          <!-- ============================= -->
          <li class="nav-small-cap">
            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
            <span class="hide-menu">Home</span>
          </li>
          <!-- =================== -->
          <!-- Dashboard -->
          <!-- =================== -->
          <li class="sidebar-item">
            <a class="sidebar-link" href="{{ route('admin.index') }}" aria-expanded="false">
              <span>
                <i class="ti ti-aperture"></i>
              </span>
              <span class="hide-menu">Dashboard</span>
            </a>
          </li>
          <li class="sidebar-item">
            <a class="sidebar-link" href="{{ route('journal.monitoring') }}" aria-expanded="false">
              <span>
                <i class="ti ti-aperture"></i>
              </span>
              <span class="hide-menu">Jurnal</span>
            </a>
          </li>

        </ul>
      </nav>
      <div class="fixed-profile p-3 bg-light-secondary rounded sidebar-ad mt-3">
        <div class="hstack gap-3">
          <div class="john-img">
            <img src="../../assets/dist/images/profile/user-1.jpg" class="rounded-circle" width="40" height="40" alt="">
          </div>
          <div class="john-title">
            <h6 class="mb-0 fs-4 fw-semibold">Mathew</h6>
            <span class="fs-2 text-dark">Designer</span>
          </div>
          <button class="border-0 bg-transparent text-primary ms-auto" tabindex="0" type="button" aria-label="logout" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="logout">
            <i class="ti ti-power fs-6"></i>
          </button>
        </div>
      </div>
      <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
  </aside>
