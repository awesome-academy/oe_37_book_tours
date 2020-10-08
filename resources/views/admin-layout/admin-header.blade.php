<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="admin/dashboard">
      <div class="sidebar-brand-icon rotate-n-15">
        <i class="fas fa-laugh-wink"></i>
      </div>
      <div class="sidebar-brand-text mx-3">{{ trans('language.logo') }}</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Heading -->
    <div class="sidebar-heading">
      {{ trans('language.manageCategories') }}
    </div>

    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTourType" aria-expanded="true" aria-controls="collapseUtilities">
        <i class="fas fa-fw fa-archive"></i>
        <span>{{ trans('language.tourType') }}</span>
      </a>
      <div id="collapseTourType" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <h6 class="collapse-header">{{ trans('language.functioning') }}</h6>
          <a class="collapse-item" href="">{{ trans('language.tourTypeList') }}</a>
          <a class="collapse-item" href="">{{ trans('language.tourTypeAdd') }}</a>
        </div>
      </div>
    </li>

    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item">
      <a class="nav-link collapsed" href="" data-toggle="collapse" data-target="#collapseUser" aria-expanded="true" aria-controls="collapseUtilities">
        <i class="fas fa-fw fa-user"></i>
        <span>{{ trans('language.user') }}</span>
      </a>
      <div id="collapseUser" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <h6 class="collapse-header">{{ trans('language.functioning') }}</h6>
              <a class="collapse-item" href="">{{ trans('language.userList') }}</a>
              <a class="collapse-item" href="">{{ trans('language.userAdd') }}</a>
        </div>
      </div>
    </li>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
      <a class="nav-link collapsed" href="" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-fw fa-cog"></i>
        <span>{{ trans('language.tour') }}</span>
      </a>
      <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <h6 class="collapse-header">{{ trans('language.functioning') }}</h6>
            <a class="collapse-item" href="">{{ trans('language.tourList') }}</a>
            <a class="collapse-item" href="">{{ trans('language.tourAdd') }}</a>
        </div>
      </div>
    </li>

    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item">
      <a class="nav-link collapsed" href="" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
        <i class="fas fa-fw fa-box-open"></i>
        <span>{{ trans('language.bookingRequest') }}</span>
      </a>
      <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <h6 class="collapse-header">{{ trans('language.functioning') }}</h6>
          <a class="collapse-item" href="">{{ trans('language.bookingRequestList') }}</a>
        </div>
      </div>
    </li>

    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseOrder" aria-expanded="true" aria-controls="collapseUtilities">
        <i class="fas fa-fw fa-pen"></i>
        <span>{{ trans('language.userReview') }}</span>
      </a>
      <div id="collapseOrder" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <h6 class="collapse-header">{{ trans('language.functioning') }}</h6>
          <a class="collapse-item" href="">{{ trans('language.userReviewList') }}</a>
        </div>
      </div>
    </li>

    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseRevenue" aria-expanded="true" aria-controls="collapseUtilities">
        <i class="fas fa-fw fa-money-bill-alt"></i>
        <span>{{ trans('language.revenue') }}</span>
      </a>
      <div id="collapseRevenue" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <h6 class="collapse-header">{{ trans('language.functioning') }}</h6>
          <a class="collapse-item" href="">{{ trans('language.revenueList') }}</a>
        </div>
      </div>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
      <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
