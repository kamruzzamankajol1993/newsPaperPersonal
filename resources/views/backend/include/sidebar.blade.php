@php
     $usr = Auth::guard('admin')->user();
 @endphp
<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title" key="t-menu">Menu</li>

                <li class="{{ Route::is('admin.dashboard') ? 'active' : '' }}">
                    <a href="{{ route('admin.dashboard') }}" class="waves-effect">
                        <i class="bx bx-home-circle"></i>
                        <span key="t-dashboard">Dashboards</span>
                    </a>
                </li>

                <li class="menu-title" key="t-apps">Main News</li>

                @if ($usr->can('category_add') || $usr->can('category_view') ||  $usr->can('category_update') ||  $usr->can('category_delete'))

                <li class="{{ Route::is('admin.category') ? 'active' : '' }}">
                    <a href="{{ route('admin.category') }}" class="waves-effect">
                        <i class="bx bx-clipboard"></i>
                        <span key="t-dashboard">Category</span>
                    </a>
                </li>
                @endif
                @if ($usr->can('news_add') || $usr->can('news_view') ||  $usr->can('news_update') ||  $usr->can('news_delete'))
                <li class="{{ Route::is('admin.news') ? 'active' : '' }}">
                    <a href="{{ route('admin.news') }}" class="waves-effect">
                        <i class="bx bx-news"></i>
                        <span key="t-dashboard">News</span>
                    </a>
                </li>

                <li class="{{ Route::is('draft_bangla') ? 'active' : '' }}">
                    <a href="{{ route('draft_bangla') }}" class="waves-effect">
                        <i class="bx bx-clipboard"></i>
                        <span key="t-dashboard">Bangla News Draft</span>
                    </a>
                </li>

                {{-- <li class="{{ Route::is('admin.newse') ? 'active' : '' }}">
                    <a href="{{ route('admin.newse') }}" class="waves-effect">
                        <i class="bx bx-news"></i>
                        <span key="t-dashboard"> English News</span>
                    </a>
                </li>

                <li class="{{ Route::is('draft_english') ? 'active' : '' }}">
                    <a href="{{ route('draft_english') }}" class="waves-effect">
                        <i class="bx bx-clipboard"></i>
                        <span key="t-dashboard">English News Draft</span>
                    </a>
                </li> --}}

                <li class="{{ Route::is('trust_news_list') ? 'active' : '' }}">
                    <a href="{{ route('trust_news_list') }}" class="waves-effect">
                        <i class="bx bx-clipboard"></i>
                        <span key="t-dashboard">Trust</span>
                    </a>
                </li>
                @endif

                <li class="menu-title" key="t-apps">Devision News</li>


                @if ($usr->can('division_cat_add') || $usr->can('division_cat_view') ||  $usr->can('division_cat_update') ||  $usr->can('division_cat_delete'))

                <li class="{{ Route::is('admin.division_category') ? 'active' : '' }}">
                    <a href="{{ route('admin.division_category') }}" class="waves-effect">
                        <i class="bx bx-clipboard"></i>
                        <span key="t-dashboard">Category</span>
                    </a>
                </li>
                @endif
                @if ($usr->can('div_news_add') || $usr->can('div_news_view') ||  $usr->can('div_news_update') ||  $usr->can('div_news_delete'))
                <li class="{{ Route::is('admin.division_news') ? 'active' : '' }}">
                    <a href="{{ route('admin.division_news') }}" class="waves-effect">
                        <i class="bx bx-news"></i>
                        <span key="t-dashboard">News</span>
                    </a>
                </li>
                @endif

                <li class="menu-title" key="t-apps">Video News</li>

                @if ($usr->can('video_add') || $usr->can('video_view') ||  $usr->can('video_update') ||  $usr->can('video_delete'))
                <li class="{{ Route::is('admin.video') ? 'active' : '' }}">
                    <a href="{{ route('admin.video') }}" class="waves-effect">
                        <i class="bx bx-video-plus"></i>
                        <span key="t-dashboard">Video</span>
                    </a>
                </li>
                @endif

                <li class="menu-title" key="t-apps">Media</li>

                 @if ($usr->can('media_add') || $usr->can('media_view') ||  $usr->can('media_update') ||  $usr->can('media_delete'))
                <li class="{{ Route::is('admin.media_files') ? 'active' : '' }}">
                    <a href="{{ route('admin.media_files') }}" class="waves-effect">
                        <i class="bx bxs-image-add"></i>
                        <span key="t-dashboard">Image List</span>
                    </a>
                </li>
                @endif


                <li class="menu-title" key="t-apps">Advertisement</li>

                @if ($usr->can('ad_add') || $usr->can('ad_view') ||  $usr->can('ad_update') ||  $usr->can('ad_delete'))
                <li class="{{ Route::is('admin.ad') ? 'active' : '' }}">
                    <a href="{{ route('admin.ad') }}" class="waves-effect">
                        <i class="bx bxs-image-add"></i>
                        <span key="t-dashboard">Ad & Social Banner </span>
                    </a>
                </li>


                 <li class="{{ Route::is('admin.unit') ? 'active' : '' }}">
                    <a href="{{ route('admin.unit') }}" class="waves-effect">
                        <i class="bx bxs-image-add"></i>
                        <span key="t-dashboard">Logo </span>
                    </a>
                </li>

                <li class="{{ Route::is('admin.social_link') ? 'active' : '' }}">
                    <a href="{{ route('admin.social_link') }}" class="waves-effect">
                        <i class="bx bxs-image"></i>
                        <span key="t-dashboard">Social Link </span>
                    </a>
                </li>
                @endif
<li class="menu-title" key="t-apps">Team</li>
  @if ($usr->can('team_add') || $usr->can('team_view') ||  $usr->can('team_update') ||  $usr->can('team_delete'))
   <li class="{{ Route::is('admin.team_list') ? 'active' : '' }}">
                    <a href="{{ route('admin.team_list') }}" class="waves-effect">
                        <i class="bx bxs-user"></i>
                        <span key="t-dashboard">Team</span>
                    </a>
                </li>
  @endif
    <li class="menu-title" key="t-apps">Report</li>

     @if ($usr->can('report_add') || $usr->can('report_view') ||  $usr->can('report_update') ||  $usr->can('report_delete'))
   <li class="{{ Route::is('report') ? 'active' : '' }}">
                    <a href="{{ route('report') }}" class="waves-effect">
                        <i class="bx bx-clipboard"></i>
                        <span key="t-dashboard">Report</span>
                    </a>
                </li>
  @endif

                <li class="menu-title" key="t-apps">Settings</li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-cog"></i>
                        <span key="t-projects">Settings</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        @if ($usr->can('system_information_add') || $usr->can('system_information_view') ||  $usr->can('system_information_update') ||  $usr->can('system_information_delete'))
                        <li class="{{ Route::is('admin.system_information')  ? 'active' : '' }}"><a href="{{ route('admin.system_information') }}"> <span>System Information</span> </a></li>

            @endif

                        @if ($usr->can('admin.create') || $usr->can('admin.view') ||  $usr->can('admin.edit') ||  $usr->can('admin.delete'))
                        <li class="{{ Route::is('admin.admins') || Route::is('admin.admins.create') || Route::is('admin.admins.edit') ? 'active' : '' }}">
                            <a href="{{ route('admin.admins') }}"><span>User</span> </a>
                        </li>

                   @endif


                   @if ($usr->can('role.create') || $usr->can('role.view') ||  $usr->can('role.edit') ||  $usr->can('role.delete'))
                        <li class="{{ Route::is('admin.roles') || Route::is('admin.roles.create') || Route::is('admin.roles.edit') ? 'active' : '' }}"><a href="{{ route('admin.roles') }}"> <span>Role List</span> </a></li>

            @endif
                   @if ($usr->can('permission.create') || $usr->can('permission.view') ||  $usr->can('permission.edit') ||  $usr->can('permission.delete'))
                     <li class="{{ Route::is('admin.permission') || Route::is('admin.permission.create') || Route::is('admin.permission.edit') ? 'active' : '' }}">
                            <a href="{{ route('admin.permission') }}"><span>Permission</span> </a>
                        </li>

                    @endif



                        {{-- <li><a href="projects-grid.html" key="t-p-grid">Projects Grid</a></li>
                        <li><a href="projects-list.html" key="t-p-list">Projects List</a></li>
                        <li><a href="projects-overview.html" key="t-p-overview">Project Overview</a></li>
                        <li><a href="projects-create.html" key="t-create-new">Create New</a></li> --}}
                    </ul>
                </li>
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
{{-- <div class="vertical-menu">

    <!-- LOGO -->
    <div class="navbar-brand-box">
        <a href="index.php" class="logo logo-dark">
                        <span class="logo-sm">
                            <img src="{{ asset('/') }}{{ $icon }}" alt="" height="22">
                        </span>
            <span class="logo-lg">
                            <img src="{{ asset('/') }}{{ $logo }}" alt="" height="20">
                        </span>
        </a>

        <a href="index.php" class="logo logo-light">
                        <span class="logo-sm">
                            <img src="{{ asset('/') }}{{ $icon }}" alt="" height="22">
                        </span>
            <span class="logo-lg">
                            <img src="{{ asset('/') }}{{ $logo }}" alt="" height="20">
                        </span>
        </a>
    </div>

    <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect vertical-menu-btn">
        <i class="fa fa-fw fa-bars"></i>
    </button>

    <div data-simplebar class="sidebar-menu-scroll">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Menu</li>

                @if ($usr->can('dashboard.view'))
                <li class="{{ Route::is('admin.dashboard') ? 'active' : '' }}">
                    <a href="{{ route('admin.dashboard') }}">
                        <i class="uil-home-alt"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
@endif

@if ($usr->can('product_main'))
<li class="menu-title">PRODUCT SECTION</li>

<li>
    <a href="javascript: void(0);" class="has-arrow waves-effect">
        <i class="uil-label"></i>
        <span>Product</span>
    </a>
    <ul class="sub-menu" aria-expanded="false">

        @if ($usr->can('product_add'))
        <li class="{{ Route::is('admin.product_list_add')  ? 'active' : '' }}"><a href="{{ route('admin.product_list_add') }}"> <span>Add Product</span> </a></li>
@endif
@if ($usr->can('product_view'))
        <li class="{{ Route::is('admin.product_list')  ? 'active' : '' }}"><a href="{{ route('admin.product_list') }}"> <span>Manage Product</span> </a></li>
@endif



    </ul>
</li>

@endif

                <li class="menu-title">Setting</li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="uil-setting"></i>
                        <span>System Settings</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">

                        @if ($usr->can('system_information_add') || $usr->can('system_information_view') ||  $usr->can('system_information_update') ||  $usr->can('system_information_delete'))
                        <li class="{{ Route::is('admin.system_information')  ? 'active' : '' }}"><a href="{{ route('admin.system_information') }}"> <span>System Information</span> </a></li>

            @endif

                        @if ($usr->can('admin.create') || $usr->can('admin.view') ||  $usr->can('admin.edit') ||  $usr->can('admin.delete'))
                        <li class="{{ Route::is('admin.admins') || Route::is('admin.admins.create') || Route::is('admin.admins.edit') ? 'active' : '' }}">
                            <a href="{{ route('admin.admins') }}"><span>User</span> </a>
                        </li>

                   @endif


                   @if ($usr->can('role.create') || $usr->can('role.view') ||  $usr->can('role.edit') ||  $usr->can('role.delete'))
                        <li class="{{ Route::is('admin.roles') || Route::is('admin.roles.create') || Route::is('admin.roles.edit') ? 'active' : '' }}"><a href="{{ route('admin.roles') }}"> <span>Role List</span> </a></li>

            @endif
                   @if ($usr->can('permission.create') || $usr->can('permission.view') ||  $usr->can('permission.edit') ||  $usr->can('permission.delete'))
                     <li class="{{ Route::is('admin.permission') || Route::is('admin.permission.create') || Route::is('admin.permission.edit') ? 'active' : '' }}">
                            <a href="{{ route('admin.permission') }}"><span>Permission</span> </a>
                        </li>

                    @endif



                    </ul>
                </li>

            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div> --}}







