<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Telemedicina Admin</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ url('public/assets/media/image/favicon.png') }}"/>

    <!-- Plugin styles -->
    <link rel="stylesheet" href="{{ url('public/vendors/bundle.css') }}" type="text/css">

    @yield('head')

    <!-- App styles -->
    <link rel="stylesheet" href="{{ url('public/assets/css/app.min.css') }}" type="text/css">

    <link rel="stylesheet" href="{{ url('public/css/image-preview.css') }}" type="text/css">
    
</head>
<body @if (trim($__env->yieldContent('bodyClass'))) class="@yield('bodyClass')" @endif>

<!-- begin::preloader-->
<div class="preloader">
    <div class="preloader-icon"></div>
</div>
<!-- end::preloader -->

<!-- BEGIN: Sidebar Group -->
<div class="sidebar-group">

    <!-- BEGIN: User Menu -->
    <div class="sidebar" id="user-menu">
        <div class="py-4 text-center" data-backround-image="{{ url('public/assets/media/image/image1.jpg') }}">
            <figure class="avatar avatar-lg mb-3 border-0">
                <img src="{{ url('public/assets/media/image/user/women_avatar1.jpg') }}" class="rounded-circle" alt="image">
            </figure>
            <h5 class="d-flex align-items-center justify-content-center">Roxana Roussell</h5>
            <div>
                Balance: <strong>$500</strong>
            </div>
        </div>
        <div class="card mb-0 card-body shadow-none">
            <div class="mb-4">
                <div class="list-group list-group-flush">
                    <a href="{{ url('profile') }}" class="list-group-item p-l-r-0">Profile</a>
                    <a href="#" class="list-group-item p-l-r-0 d-flex">Followers</a>
                    <a href="{{ url('mail') }}" class="list-group-item p-l-r-0 d-flex">
                        Inbox <span class="badge badge-danger ml-auto">2</span>
                    </a>
                    <a href="#" class="list-group-item p-l-r-0">Billing</a>
                    <a href="#" class="list-group-item p-l-r-0" data-sidebar-target="#settings">Settings</a>
                    <a href="{{ url('login') }}" class="list-group-item p-l-r-0 text-danger" data-sidebar-target="#settings">Sign Out!</a>
                </div>
            </div>
            <div class="mb-4">
                <h6 class="d-flex justify-content-between">
                    Completed Tasks
                    <span class="float-right">%68</span>
                </h6>
                <div class="progress" style="height:5px;">
                    <div class="progress-bar bg-secondary" role="progressbar" style="width: 68%;"
                         aria-valuenow="68"
                         aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
            <div class="mb-4">
                <h6 class="d-flex justify-content-between">
                    Storage
                    <span>%25</span>
                </h6>
                <div class="progress" style="height: 5px;">
                    <div class="progress-bar bg-info" role="progressbar" style="width: 40%;" aria-valuenow="40"
                         aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
            <div class="mb-4">
                <h6>About</h6>
                <p class="text-muted mb-0">I love reading, traveling and discovering new things. You need to be happy in
                    life.</p>
            </div>
            <div class="mb-4">
                <h6>City</h6>
                <p class="text-muted mb-0">Germany / Berlin</p>
            </div>
            <div class="mb-4">
                <h6>Social Links</h6>
                <ul class="list-inline">
                    <li class="list-inline-item">
                        <a href="#" class="btn btn-sm btn-floating btn-facebook">
                            <i class="fa fa-facebook"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#" class="btn btn-sm btn-floating btn-twitter">
                            <i class="fa fa-twitter"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#" class="btn btn-sm btn-floating btn-dribbble">
                            <i class="fa fa-dribbble"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#" class="btn btn-sm btn-floating btn-whatsapp">
                            <i class="fa fa-whatsapp"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#" class="btn btn-sm btn-floating btn-linkedin">
                            <i class="fa fa-linkedin"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- END: User Menu -->

    <!-- BEGIN: Settings -->
    <div class="sidebar" id="settings">
        <div class="card">
            <div class="card-body">
                <h6 class="card-title">Settings</h6>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item pl-0 pr-0">
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="customSwitch1" checked>
                            <label class="custom-control-label" for="customSwitch1">Allow notifications.</label>
                        </div>
                    </li>
                    <li class="list-group-item pl-0 pr-0">
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="customSwitch2">
                            <label class="custom-control-label" for="customSwitch2">Hide user requests</label>
                        </div>
                    </li>
                    <li class="list-group-item pl-0 pr-0">
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="customSwitch3" checked>
                            <label class="custom-control-label" for="customSwitch3">Speed up demands</label>
                        </div>
                    </li>
                    <li class="list-group-item pl-0 pr-0">
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="customSwitch4" checked>
                            <label class="custom-control-label" for="customSwitch4">Hide menus</label>
                        </div>
                    </li>
                    <li class="list-group-item pl-0 pr-0">
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="customSwitch5">
                            <label class="custom-control-label" for="customSwitch5">Remember next visits</label>
                        </div>
                    </li>
                    <li class="list-group-item pl-0 pr-0">
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="customSwitch6">
                            <label class="custom-control-label" for="customSwitch6">Enable report
                                generation.</label>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- END: Settings -->

</div>
<!-- END: Sidebar Group -->

<!-- begin::main -->
<div class="layout-wrapper">

    <!-- begin::header -->
    <div class="header d-print-none">

        <div class="header-left">
            <div class="navigation-toggler">
                <a href="#" data-action="navigation-toggler">
                    <i data-feather="menu"></i>
                </a>
            </div>
            <div class="header-logo">
                <a href="{{ url('/') }}">
                    <img class="logo" src="{{ url('public/assets/media/image/logo.png') }}" alt="logo" style="width: 80%;">
                    <!-- <img class="logo-light" src="{{ url('public/assets/media/image/logo-light.png') }}" alt="light logo"> -->
                </a>
            </div>
        </div>

        <div class="header-body">
            <div class="header-body-left">
                <div class="page-title">
                    <h4>@yield('pageTitle')</h4>
                </div>
            </div>
            <div class="header-body-right">
                <ul class="navbar-nav">

                    <!-- begin::header fullscreen -->
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link" title="Fullscreen" data-toggle="fullscreen">
                            <i class="maximize" data-feather="maximize"></i>
                            <i class="minimize" data-feather="minimize"></i>
                        </a>
                    </li>
                    <!-- end::header fullscreen -->

                   

                    <!-- begin::header notification dropdown -->
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link nav-link-notify" title="Notifications" data-toggle="dropdown">
                            <i data-feather="bell"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-big">
                            <div class="bg-dark p-4 text-center d-flex justify-content-between align-items-center">
                                <h5 class="mb-0">Notifications</h5>
                                <small class="opacity-7">1 unread notifications</small>
                            </div>
                            <div>
                                <ul class="list-group list-group-flush">
                                    <li>
                                        <a href="#" class="list-group-item d-flex align-items-center hide-show-toggler">
                                            <div>
                                                <figure class="avatar mr-2">
                                                <span
                                                    class="avatar-title bg-success-bright text-success rounded-circle">
                                                    <i class="ti-user"></i>
                                                </span>
                                                </figure>
                                            </div>
                                            <div class="flex-grow-1">
                                                <p class="mb-0 line-height-20 d-flex justify-content-between">
                                                    New customer registered
                                                    <i title="Mark as read" data-toggle="tooltip"
                                                       class="hide-show-toggler-item fa fa-circle-o font-size-11"></i>
                                                </p>
                                                <span class="text-muted small">20 min ago</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="text-divider small pb-2 pl-3 pt-3">
                                        <span>Old notifications</span>
                                    </li>
                                    <li>
                                        <a href="#" class="list-group-item d-flex align-items-center hide-show-toggler">
                                            <div>
                                                <figure class="avatar mr-2">
                                                <span
                                                    class="avatar-title bg-warning-bright text-warning rounded-circle">
                                                    <i class="ti-package"></i>
                                                </span>
                                                </figure>
                                            </div>
                                            <div class="flex-grow-1">
                                                <p class="mb-0 line-height-20 d-flex justify-content-between">
                                                    New Order Recieved
                                                    <i title="Mark as unread" data-toggle="tooltip"
                                                       class="hide-show-toggler-item fa fa-check font-size-11"></i>
                                                </p>
                                                <span class="text-muted small">45 sec ago</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#"
                                           class="list-group-item d-flex align-items-center hide-show-toggler">
                                            <div>
                                                <figure class="avatar mr-2">
                                                <span class="avatar-title bg-danger-bright text-danger rounded-circle">
                                                    <i class="ti-server"></i>
                                                </span>
                                                </figure>
                                            </div>
                                            <div class="flex-grow-1">
                                                <p class="mb-0 line-height-20 d-flex justify-content-between">
                                                    Server Limit Reached!
                                                    <i title="Mark as unread" data-toggle="tooltip"
                                                       class="hide-show-toggler-item fa fa-check font-size-11"></i>
                                                </p>
                                                <span class="text-muted small">55 sec ago</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#"
                                           class="list-group-item d-flex align-items-center hide-show-toggler">
                                            <div>
                                                <figure class="avatar mr-2">
                                                <span class="avatar-title bg-info-bright text-info rounded-circle">
                                                    <i class="ti-layers"></i>
                                                </span>
                                                </figure>
                                            </div>
                                            <div class="flex-grow-1">
                                                <p class="mb-0 line-height-20 d-flex align-items-center justify-content-between">
                                                    Apps are ready for update
                                                    <i title="Mark as unread" data-toggle="tooltip"
                                                       class="hide-show-toggler-item fa fa-check font-size-11"></i>
                                                </p>
                                                <span class="text-muted small">Yesterday</span>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="p-2 text-right border-top">
                                <ul class="list-inline small">
                                    <li class="list-inline-item mb-0">
                                        <a href="#">Mark All Read</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <!-- end::header notification dropdown -->

                   

                    <!-- begin::settings -->
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link" title="Settings" data-sidebar-target="#settings">
                            <i data-feather="settings"></i>
                        </a>
                    </li>
                    <!-- end::settings -->

                    <!-- begin::user menu -->
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link" title="User menu" data-sidebar-target="#user-menu">
                            <span class="mr-2 d-sm-inline d-none">Roxana Roussell</span>
                            <figure class="avatar avatar-sm">
                                <img src="{{ url('public/assets/media/image/user/women_avatar1.jpg') }}" class="rounded-circle"
                                     alt="avatar">
                            </figure>
                        </a>
                    </li>
                    <!-- end::user menu -->

                </ul>

                <!-- begin::mobile header toggler -->
                <ul class="navbar-nav d-flex align-items-center">
                    <li class="nav-item header-toggler">
                        <a href="#" class="nav-link">
                            <i data-feather="arrow-down"></i>
                        </a>
                    </li>
                </ul>
                <!-- end::mobile header toggler -->
            </div>
        </div>

    </div>
    <!-- end::header -->

    <div class="content-wrapper">

        <!-- begin::navigation -->
        <div class="navigation">
            <div class="navigation-menu-tab">
                <ul>
                    <li>
                        <a href="#" data-toggle="tooltip" data-placement="right" title="Image"
                           data-nav-target="#images" class="active">
                            <i data-feather="shopping-bag"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" data-toggle="tooltip" data-placement="right" title="Doctors"
                           data-nav-target="#user">
                            <i data-feather="users"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" data-toggle="tooltip" data-placement="right" title="Analytics"
                           data-nav-target="#analytics">
                            <i data-feather="activity"></i>
                        </a>
                    </li>
                    <!-- <li>
                        <a href="#" data-toggle="tooltip" data-placement="right" title="Projects"
                           data-nav-target="#projects">
                            <i data-feather="briefcase"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" data-toggle="tooltip"
                           data-placement="right" title="Apps" data-nav-target="#apps">
                            <i data-feather="globe"></i>
                        </a>
                    </li>
                    
                    <li>
                        <a href="#" data-toggle="tooltip"
                           data-placement="right" title="Components"
                           data-nav-target="#components">
                            <i data-feather="layers"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" data-toggle="tooltip"
                           data-placement="right" title="Forms"
                           data-nav-target="#forms">
                            <i data-feather="edit-3"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" data-toggle="tooltip"
                           data-placement="right" title="Plugins"
                           data-nav-target="#plugins">
                            <i data-feather="gift"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" data-toggle="tooltip"
                           data-placement="right" title="Pages" data-nav-target="#pages">
                            <i data-feather="copy"></i>
                        </a>
                    </li> -->
                </ul>
            </div>
            <div class="navigation-menu-body">
                <div class="navigation-menu-group">
                    <div id="images" class="open">
                        <ul>
                            <?php $count = count(Request::segments());?>
                            <!-- <li>{{ $count }}</li> -->
                            <li class="navigation-divider d-flex align-items-center">
                                <i class="mr-2" data-feather="shopping-bag"></i> Media
                            </li>
                            <!-- <li>
                                <a @if(!request()->segment(1) || request()->segment(1) == 'ecommerce-dashboard') class="active"
                                   @endif href="{{ url('ecommerce-dashboard') }}">Dashboard</a></li> -->
                            <li>
                                <a @if(request()->segment($count) == 'admin' || request()->segment($count) == 'media' || request()->segment($count) == 'logo') class="active"
                                   @endif href="{{ url('admin/media/logo') }}">Logo</a></li>
                            <li>
                                <a @if(request()->segment($count) == 'image') class="active"
                                   @endif href="{{ url('admin/media/image') }}">Images</a></li>
                            <li>
                                <a @if(request()->segment($count) == 'video') class="active"
                                   @endif href="{{ url('admin/media/video') }}">Videos</a></li>
                            <li>
                                <a @if(request()->segment($count) == 'partner') class="active"
                                   @endif href="{{ url('admin/media/partner') }}">Partner Companies</a></li>
                            <!-- <li>
                                <a @if(request()->segment(1) == 'product-detail') class="active"
                                   @endif href="{{ url('product-detail') }}">Product Detail</a></li> -->
                        </ul>
                    </div>
                    <div id="analytics">
                        <ul>
                            <li class="navigation-divider d-flex align-items-center">
                                <i class="mr-2" data-feather="activity"></i> Analytics
                            </li>
                            <li>
                                <a @if(request()->segment(1) == 'analytics-dashboard') class="active"
                                   @endif href="{{ url('analytics-dashboard') }}">Dashboard</a></li>
                            <li>
                                <a @if(request()->segment(1) == 'customers') class="active"
                                   @endif href="{{ url('customers') }}">Customers</a></li>
                            <li class="navigation-divider">Summary</li>
                            <li>
                                <a href="#" class="d-flex align-items-start">
                                    <div>
                                        <figure class="avatar mr-2">
                                <span class="avatar-title bg-warning rounded-circle">
                                    <i class="ti-bar-chart-alt"></i>
                                </span>
                                        </figure>
                                    </div>
                                    <div>
                                        <h6 class="mb-0">Total Sales</h6>
                                        <p class="text-muted mb-0 small">This Mounth</p>
                                        <h4 class="mb-0">$50.958</h4>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="d-flex align-items-start">
                                    <div>
                                        <figure class="avatar mr-2">
                                <span class="avatar-title bg-success rounded-circle">
                                    <i class="ti-world"></i>
                                </span>
                                        </figure>
                                    </div>
                                    <div>
                                        <h6 class="mb-0">Projects</h6>
                                        <p class="text-muted mb-0 small">Today</p>
                                        <h4 class="mb-0">35</h4>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="d-flex align-items-start">
                                    <div>
                                        <figure class="avatar mr-2">
                                <span class="avatar-title bg-info rounded-circle">
                                    <i class="ti-user"></i>
                                </span>
                                        </figure>
                                    </div>
                                    <div>
                                        <h6 class="mb-0">Total Visitor</h6>
                                        <p class="text-muted mb-0 small">Today</p>
                                        <h4 class="mb-0">5.301</h4>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div id="projects">
                        <ul>
                            <li class="navigation-divider d-flex align-items-center">
                                <i class="mr-2" data-feather="briefcase"></i> Projects
                            </li>
                            <li>
                                <a @if(request()->segment(1) == 'projects-dashboard') class="active"
                                   @endif href="{{ url('projects-dashboard') }}">Dashboard</a></li>
                            <li>
                                <a @if(request()->segment(1) == 'project-list') class="active"
                                   @endif href="{{ url('project-list') }}">Project List</a></li>
                            <li>
                                <a @if(request()->segment(1) == 'project-grid') class="active"
                                   @endif href="{{ url('project-grid') }}">Project Grid</a></li>
                            <li>
                                <a @if(request()->segment(1) == 'project-detail') class="active"
                                   @endif href="{{ url('project-detail') }}">Project Detail</a></li>
                            <li>
                                <a @if(request()->segment(1) == 'clients') class="active"
                                   @endif href="{{ url('clients') }}">Clients</a></li>
                            <li class="navigation-divider">Summary</li>
                            <li>
                                <a href="#" class="d-flex align-items-start">
                                    <div>
                                        <figure class="avatar mr-2">
                                <span class="avatar-title bg-warning rounded-circle">
                                    <i class="ti-bar-chart-alt"></i>
                                </span>
                                        </figure>
                                    </div>
                                    <div>
                                        <h6 class="mb-0">Total Sales</h6>
                                        <p class="text-muted mb-0 small">This Mounth</p>
                                        <h4 class="mb-0">$50.958</h4>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="d-flex align-items-start">
                                    <div>
                                        <figure class="avatar mr-2">
                                <span class="avatar-title bg-success rounded-circle">
                                    <i class="ti-world"></i>
                                </span>
                                        </figure>
                                    </div>
                                    <div>
                                        <h6 class="mb-0">Projects</h6>
                                        <p class="text-muted mb-0 small">Today</p>
                                        <h4 class="mb-0">35</h4>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="d-flex align-items-start">
                                    <div>
                                        <figure class="avatar mr-2">
                                <span class="avatar-title bg-info rounded-circle">
                                    <i class="ti-user"></i>
                                </span>
                                        </figure>
                                    </div>
                                    <div>
                                        <h6 class="mb-0">Total Visitor</h6>
                                        <p class="text-muted mb-0 small">Today</p>
                                        <h4 class="mb-0">5.301</h4>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div id="apps">
                        <ul>
                            <li class="navigation-divider d-flex align-items-center">
                                <i class="mr-2" data-feather="globe"></i> Apps
                            </li>
                            <li>
                                <a @if(request()->segment(1) == 'chat') class="active"
                                   @endif href="{{ url('chat') }}">
                                    <span>Chat</span>
                                    <span class="badge badge-danger">5</span>
                                </a>
                            </li>
                            <li>
                                <a @if(request()->segment(1) == 'mail') class="active"
                                   @endif href="{{ url('mail') }}">
                                    <span>Mail</span>
                                </a>
                            </li>
                            <li>
                                <a @if(request()->segment(1) == 'todo-list') class="active"
                                   @endif href="{{ url('todo-list') }}">
                                    <span>Todo List</span>
                                    <span class="badge badge-warning">2</span>
                                </a>
                            </li>
                            <li>
                                <a @if(request()->segment(1) == 'file-manager') class="active"
                                   @endif href="{{ url('file-manager') }}">
                                    <span>File Manager</span>
                                </a>
                            </li>
                            <li>
                                <a @if(request()->segment(1) == 'calendar') class="active"
                                   @endif href="{{ url('calendar') }}">
                                    <span>Calendar</span>
                                </a>
                            </li>
                            <li>
                                <a @if(request()->segment(1) == 'gallery') class="active"
                                   @endif href="{{ url('gallery') }}">
                                    <span>Gallery</span>
                                </a>
                            </li>
                            <li>
                                <a @if(request()->segment(1) == 'invoice') class="active"
                                   @endif href="{{ url('invoice') }}">Invoice</a></li>
                            <li class="navigation-divider">Recent Contacts</li>
                            <li>
                                <div class="list-group list-group-flush">
                                    <a href="#" class="list-group-item d-flex align-items-center">
                                        <div>
                                            <div class="avatar avatar-sm m-r-10">
                                                <img src="{{ url('public/assets/media/image/user/man_avatar1.jpg') }}"
                                                     class="rounded-circle" alt="image">
                                            </div>
                                        </div>
                                        <span>Valentine Maton</span>
                                    </a>
                                    <a href="#" class="list-group-item d-flex align-items-center">
                                        <div>
                                            <div class="avatar avatar-sm m-r-10">
                                                <img src="{{ url('public/assets/media/image/user/women_avatar2.jpg') }}"
                                                     class="rounded-circle" alt="image">
                                            </div>
                                        </div>
                                        <span>Holmes Cherryman</span>
                                    </a>
                                    <a href="#" class="list-group-item d-flex align-items-center">
                                        <div>
                                            <div class="avatar avatar-sm m-r-10">
                                                <img src="{{ url('public/assets/media/image/user/women_avatar4.jpg') }}"
                                                     class="rounded-circle" alt="image">
                                            </div>
                                        </div>
                                        <span>Kenneth Hune</span>
                                    </a>
                                    <a href="#" class="list-group-item d-flex align-items-center">
                                        <div>
                                            <div class="avatar avatar-sm m-r-10">
                                                <img src="{{ url('public/assets/media/image/user/women_avatar3.jpg') }}"
                                                     class="rounded-circle" alt="image">
                                            </div>
                                        </div>
                                        <span>Holmes Cherryman</span>
                                    </a>
                                    <a href="#" class="list-group-item d-flex align-items-center">
                                        <div>
                                            <div class="avatar avatar-sm m-r-10">
                                                <img src="{{ url('public/assets/media/image/user/women_avatar5.jpg') }}"
                                                     class="rounded-circle" alt="image">
                                            </div>
                                        </div>
                                        <span>Kenneth Hune</span>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div id="user">
                        <ul>
                            <li class="navigation-divider d-flex align-items-center">
                                <i class="mr-2" data-feather="users"></i> User Forms
                            </li>
                            <li>
                                <a @if(request()->segment(1) == 'profile') class="active"
                                   @endif href="{{ url('profile') }}">Doctors</a></li>
                            <li>
                                <a @if(request()->segment(1) == 'profile') class="active"
                                   @endif href="{{ url('profile') }}">Profile</a></li>
                            <li>
                                <a @if(request()->segment(1) == 'user-list') class="active"
                                   @endif href="{{ url('user-list') }}">User List</a></li>
                            <li>
                                <a @if(request()->segment(1) == 'user-edit') class="active"
                                   @endif href="{{ url('user-edit') }}">User Edit</a></li>
                            
                            </li>
                            
                            <li class="navigation-divider">Users</li>
                            <li>
                                <div class="avatar-group ml-4">
                                    <figure class="avatar avatar-sm">
                                        <a href="#" title="Krisha McAlees" data-toggle="tooltip">
                                            <img src="{{ url('public/assets/media/image/user/women_avatar4.jpg') }}" class="rounded-circle"
                                                 alt="avatar">
                                        </a>
                                    </figure>
                                    <figure class="avatar avatar-sm">
                                        <a href="#" title="Rozella Baskerfield" data-toggle="tooltip">
                                            <span class="avatar-title bg-info rounded-circle">R</span>
                                        </a>
                                    </figure>
                                    <figure class="avatar avatar-sm">
                                        <a href="#" title="Hilton Dew" data-toggle="tooltip">
                                            <img src="{{ url('public/assets/media/image/user/man_avatar3.jpg') }}" class="rounded-circle"
                                                 alt="avatar">
                                        </a>
                                    </figure>
                                    <figure class="avatar avatar-sm">
                                        <a href="#" title="Mellie Smittoune" data-toggle="tooltip">
                                            <img src="{{ url('public/assets/media/image/user/man_avatar1.jpg') }}" class="rounded-circle"
                                                 alt="avatar">
                                        </a>
                                    </figure>
                                    <figure class="avatar avatar-sm">
                                        <a href="#" title="Avery Hampshire" data-toggle="tooltip">
                                            <span class="avatar-title bg-warning rounded-circle">A</span>
                                        </a>
                                    </figure>
                                    <figure class="avatar avatar-sm">
                                        <a href="#" title="Krisha McAlees" data-toggle="tooltip">
                                            <img src="{{ url('public/assets/media/image/user/women_avatar2.jpg') }}" class="rounded-circle"
                                                 alt="avatar">
                                        </a>
                                    </figure>
                                    <figure class="avatar avatar-sm">
                                        <a href="#" title="Rozella Baskerfield" data-toggle="tooltip">
                                            <span class="avatar-title bg-success rounded-circle">R</span>
                                        </a>
                                    </figure>
                                    <figure class="avatar avatar-sm">
                                        <a href="#" title="Other" data-toggle="tooltip">
                                            <span class="avatar-title bg-dark rounded-circle">+5</span>
                                        </a>
                                    </figure>
                                </div>
                            </li>
                            <li class="navigation-divider">Following</li>
                            <li>
                                <div class="avatar-group ml-4">
                                    <figure class="avatar avatar-sm">
                                        <a href="#" title="Krisha McAlees" data-toggle="tooltip">
                                            <img src="{{ url('public/assets/media/image/user/women_avatar5.jpg') }}" class="rounded-circle"
                                                 alt="avatar">
                                        </a>
                                    </figure>
                                    <figure class="avatar avatar-sm">
                                        <a href="#" title="Darby Croci" data-toggle="tooltip">
                                            <span class="avatar-title bg-danger rounded-circle">D</span>
                                        </a>
                                    </figure>
                                    <figure class="avatar avatar-sm">
                                        <a href="#" title="Hilton Dew" data-toggle="tooltip">
                                            <img src="{{ url('public/assets/media/image/user/man_avatar5.jpg') }}" class="rounded-circle"
                                                 alt="avatar">
                                        </a>
                                    </figure>
                                    <figure class="avatar avatar-sm">
                                        <a href="#" title="Mellie Smittoune" data-toggle="tooltip">
                                            <img src="{{ url('public/assets/media/image/user/man_avatar2.jpg') }}" class="rounded-circle"
                                                 alt="avatar">
                                        </a>
                                    </figure>
                                    <figure class="avatar avatar-sm">
                                        <a href="#" title="Mahalia Lemme" data-toggle="tooltip">
                                            <span class="avatar-title bg-secondary rounded-circle">M</span>
                                        </a>
                                    </figure>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div id="components">
                        <ul>
                            <li class="navigation-divider d-flex align-items-center">
                                <i class="mr-2" data-feather="layers"></i> Components
                            </li>
                            <li>
                                <a href="#">Basic Components</a>
                                <ul>
                                    <li>
                                        <a @if(request()->segment(1) == 'alert') class="active"
                                           @endif href="{{ url('alert') }}">Alerts</a></li>
                                    <li>
                                        <a @if(request()->segment(1) == 'accordion') class="active"
                                           @endif href="{{ url('accordion') }}">Accordion</a></li>
                                    <li>
                                        <a @if(request()->segment(1) == 'buttons') class="active"
                                           @endif href="{{ url('buttons') }}">Buttons</a></li>
                                    <li>
                                        <a @if(request()->segment(1) == 'dropdown') class="active"
                                           @endif href="{{ url('dropdown') }}">Dropdown</a></li>
                                    <li>
                                        <a @if(request()->segment(1) == 'list-group') class="active"
                                           @endif href="{{ url('list-group') }}">List Group</a></li>
                                    <li>
                                        <a @if(request()->segment(1) == 'pagination') class="active"
                                           @endif href="{{ url('pagination') }}">Pagination</a></li>
                                    <li>
                                        <a @if(request()->segment(1) == 'typography') class="active"
                                           @endif href="{{ url('typography') }}">Typography</a></li>
                                    <li>
                                        <a @if(request()->segment(1) == 'media-object') class="active"
                                           @endif href="{{ url('media-object') }}">Media Object</a>
                                    </li>
                                    <li>
                                        <a @if(request()->segment(1) == 'progress') class="active"
                                           @endif href="{{ url('progress') }}">Progress</a></li>
                                    <li>
                                        <a @if(request()->segment(1) == 'modal') class="active"
                                           @endif href="{{ url('modal') }}">Modal</a></li>
                                    <li>
                                        <a @if(request()->segment(1) == 'spinners') class="active"
                                           @endif href="{{ url('spinners') }}">Spinners</a></li>
                                    <li>
                                        <a @if(request()->segment(1) == 'navs') class="active"
                                           @endif href="{{ url('navs') }}">Navs</a></li>
                                    <li>
                                        <a @if(request()->segment(1) == 'tab') class="active"
                                           @endif href="{{ url('tab') }}">Tab</a></li>
                                    <li>
                                        <a @if(request()->segment(1) == 'tooltip') class="active"
                                           @endif href="{{ url('tooltip') }}">Tooltip</a></li>
                                    <li>
                                        <a @if(request()->segment(1) == 'popovers') class="active"
                                           @endif href="{{ url('popovers') }}">Popovers</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Cards</a>
                                <ul>
                                    <li>
                                        <a @if(request()->segment(1) == 'basic-cards') class="active"
                                           @endif href="{{ url('basic-cards') }}">Basic Cards </a></li>
                                    <li>
                                        <a @if(request()->segment(1) == 'image-cards') class="active"
                                           @endif href="{{ url('image-cards') }}">Image Cards </a></li>
                                    <li>
                                        <a @if(request()->segment(1) == 'scroll-cards') class="active"
                                           @endif href="{{ url('scroll-cards') }}">Scroll Cards </a></li>
                                    <li>
                                        <a @if(request()->segment(1) == 'other-cards') class="active"
                                           @endif href="{{ url('other-cards') }}">Others Cards</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Tables</a>
                                <ul>
                                    <li>
                                        <a @if(request()->segment(1) == 'basic-tables') class="active"
                                           @endif href="{{ url('basic-tables') }}">Basic Tables</a></li>
                                    <li>
                                        <a @if(request()->segment(1) == 'dataTable') class="active"
                                           @endif href="{{ url('dataTable') }}">Datatable</a></li>
                                    <li>
                                        <a @if(request()->segment(1) == 'responsive-tables') class="active"
                                           @endif href="{{ url('responsive-tables') }}">Responsive Tables</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Charts</a>
                                <ul>
                                    <li>
                                        <a @if(request()->segment(1) == 'apexchart') class="active"
                                           @endif href="{{ url('apexchart') }}">Apex Chart</a></li>
                                    <li>
                                        <a @if(request()->segment(1) == 'chartjs') class="active"
                                           @endif href="{{ url('chartjs') }}">Chartjs</a></li>
                                    <li>
                                        <a @if(request()->segment(1) == 'justgage') class="active"
                                           @endif href="{{ url('justgage') }}">Justgage</a></li>
                                    <li>
                                        <a @if(request()->segment(1) == 'morsis') class="active"
                                           @endif href="{{ url('morsis') }}">Morsis</a></li>
                                    <li>
                                        <a @if(request()->segment(1) == 'peity') class="active"
                                           @endif href="{{ url('peity') }}">Peity</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Maps</a>
                                <ul>
                                    <li>
                                        <a @if(request()->segment(1) == 'google-map') class="active"
                                           @endif href="{{ url('google-map') }}">Google Map</a></li>
                                    <li>
                                        <a @if(request()->segment(1) == 'vector-map') class="active"
                                           @endif href="{{ url('vector-map') }}">Vector Map</a></li>
                                </ul>
                            </li>
                            <li>
                                <a @if(request()->segment(1) == 'avatar') class="active"
                                   @endif href="{{ url('avatar') }}">Avatar</a></li>
                            <li>
                                <a @if(request()->segment(1) == 'icons') class="active"
                                   @endif href="{{ url('icons') }}">Icons</a></li>
                            <li>
                                <a @if(request()->segment(1) == 'colors') class="active"
                                   @endif href="{{ url('colors') }}">Colors</a></li>
                        </ul>
                    </div>
                    <div id="forms">
                        <ul>
                            <li class="navigation-divider d-flex align-items-center">
                                <i class="mr-2" data-feather="edit-3"></i> Forms
                            </li>
                            <li>
                                <a @if(request()->segment(1) == 'basic-forms') class="active"
                                   @endif href="{{ url('basic-forms') }}">Basic Forms</a></li>
                            <li>
                                <a @if(request()->segment(1) == 'custom-forms') class="active"
                                   @endif href="{{ url('custom-forms') }}">Custom Forms</a></li>
                            <li>
                                <a @if(request()->segment(1) == 'advanced-forms') class="active"
                                   @endif href="{{ url('advanced-forms') }}">Advanced Forms</a></li>
                            <li>
                                <a @if(request()->segment(1) == 'form-validation') class="active"
                                   @endif href="{{ url('form-validation') }}">Form Validation</a></li>
                            <li>
                                <a @if(request()->segment(1) == 'form-wizard') class="active"
                                   @endif href="{{ url('form-wizard') }}">Form Wizard</a></li>
                            <li>
                                <a @if(request()->segment(1) == 'file-upload') class="active"
                                   @endif href="{{ url('file-upload') }}">File Upload</a></li>
                            <li>
                                <a @if(request()->segment(1) == 'datepicker') class="active"
                                   @endif href="{{ url('datepicker') }}">Datepicker</a></li>
                            <li>
                                <a @if(request()->segment(1) == 'timepicker') class="active"
                                   @endif href="{{ url('timepicker') }}">Timepicker</a></li>
                            <li>
                                <a @if(request()->segment(1) == 'colorpicker') class="active"
                                   @endif href="{{ url('colorpicker') }}">Colorpicker</a></li>
                        </ul>
                    </div>
                    <div id="plugins">
                        <ul>
                            <li class="navigation-divider d-flex align-items-center">
                                <i class="mr-2" data-feather="gift"></i> Plugins
                            </li>
                            <li>
                                <a @if(request()->segment(1) == 'sweet-alert') class="active"
                                   @endif href="{{ url('sweet-alert') }}">Sweet Alert</a></li>
                            <li>
                                <a @if(request()->segment(1) == 'lightbox') class="active"
                                   @endif href="{{ url('lightbox') }}">Lightbox</a></li>
                            <li>
                                <a @if(request()->segment(1) == 'toast') class="active"
                                   @endif href="{{ url('toast') }}">Toast</a></li>
                            <li>
                                <a @if(request()->segment(1) == 'tour') class="active"
                                   @endif href="{{ url('tour') }}">Tour</a></li>
                            <li>
                                <a @if(request()->segment(1) == 'slick-slide') class="active"
                                   @endif href="{{ url('slick-slide') }}">Slick Slide</a></li>
                            <li>
                                <a @if(request()->segment(1) == 'nestable') class="active"
                                   @endif href="{{ url('nestable') }}">Nestable</a></li>
                        </ul>
                    </div>
                    <div id="pages">
                        <ul>
                            <li class="navigation-divider d-flex align-items-center">
                                <i class="mr-2" data-feather="copy"></i> Pages
                            </li>
                            <li>
                                <a @if(request()->segment(1) == 'timeline') class="active"
                                   @endif href="{{ url('timeline') }}">Timeline</a></li>
                            <li>
                                <a @if(request()->segment(1) == 'pricing-table') class="active"
                                   @endif href="{{ url('pricing-table') }}">Pricing Table</a></li>

                            <li>
                                <a @if(request()->segment(1) == 'pricing-table-2') class="active"
                                   @endif href="{{ url('pricing-table-2') }}">Pricing Table 2</a></li>
                            <li>
                                <a @if(request()->segment(1) == 'search-result') class="active"
                                   @endif href="{{ url('search-result') }}">Search Result</a></li>
                            <li>
                                <a @if(request()->segment(1) == 'mailing') class="active"
                                   @endif href="{{ url('mailing') }}">Mailing</a></li>
                            <li>
                                <a href="#">Error Pages</a>
                                <ul>
                                    <li><a href="{{ url('404') }}" target="_blank">404</a></li>
                                    <li><a href="{{ url('503') }}" target="_blank">503</a></li>
                                    <li><a href="{{ url('mean-at-work') }}" target="_blank">Mean at
                                            Work</a></li>
                                </ul>
                            </li>
                            <li>
                                <a @if(request()->segment(1) == 'blank-page') class="active"
                                   @endif href="{{ url('blank-page') }}">Blank Page</a>
                            </li>
                            <li>
                                <a href="#">Menu Level</a>
                                <ul>
                                    <li>
                                        <a href="#">Menu Level</a>
                                        <ul>
                                            <li>
                                                <a href="#">Menu Level </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- end::navigation -->

        <div class="content-body">

            <div class="content">

                @yield('content')

            </div>

            <!-- begin::footer -->
            <footer class="content-footer">
                <div>© {{ date('Y') }} Nago - <a href="http://laborasyon.com" target="_blank">Laborasyon</a></div>
                <div>
                    <nav class="nav">
                        <a href="https://themeforest.net/licenses/standard" class="nav-link">Licenses</a>
                        <a href="#" class="nav-link">Change Log</a>
                        <a href="#" class="nav-link">Get Help</a>
                    </nav>
                </div>
            </footer>
            <!-- end::footer -->

        </div>

    </div>

</div>
<!-- end::main -->

<!-- Plugin scripts -->
<script src="{{ url('public/vendors/bundle.js') }}"></script>

@yield('script')

<!-- App scripts -->
<script src="{{ url('public/assets/js/app.min.js') }}"></script>

</body>
</html>
