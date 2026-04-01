<header class="main-header">
    <!-- Logo -->

<!-- Header Navbar: style can be found in header.less -->
<nav class="navbar navbar-expand " style="padding: 0;">
    <!-- Sidebar toggle button-->
      <a href="#" id="header-toogle-large" class="sidebar-toggle" data-toggle="offcanvas" role="button">
          <span class="sr-only">Toggle navigation</span>
      </a>
    <div id="header-logo-area" class="navbar-brand">
      <a href="javascript:void(0)" v-on:click="setView('dashboard')" class="logo-header">
        @if(env('APP_TYPE')=='bank')
        <img src="{{ assets_url('images/new-logos.png') }}"/>
        @else
          <img src="{{ assets_url('images/def-logo2.svg') }}" alt="Logo"/>
        @endif
      </a>
    </div>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
      <ul class="navbar-nav mb-2 mb-lg-0">
          <li class="dropdown notifications-menu" style="position: relative;padding-right: 10px"
              onmouseover="this.querySelector('.dropdown-menu').style.display='block';"
              onmouseout="this.querySelector('.dropdown-menu').style.display='none';">
              <a href="#" style="text-decoration: none" class="dropdown-toggle" aria-expanded="true" title="profile">
                  <i class="fa fa-users"></i>  @if(isset($user_name)) {{ $user_name }} @endif
              </a>
              <ul class="dropdown-menu" style="display: none; position: absolute; right: 0; top: 100%;">
                  <li>
                      <!-- inner menu: contains the actual data -->
                      <ul class="menu">
                          <li >
                              <a class="text-decoration-none" id="profile-btn" href="javascript:void(0)"  v-on:click="setView('profile-btn')" data-service="user-profile/change-password" data-menu="change-password" data-parent-menu="user-profile">
                                  Change Password
                              </a>
                          </li>
                      </ul>
                  </li>
              </ul>
          </li>

          <li style="padding-right: 10px">
              <a href="{{ route('logout') }}" style="text-decoration: none" title="logout"><i class="fa fa-sign-out"></i> Logout</a>
          </li>
      </ul>
    </div>
</nav>
</header>
