<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Telemedicina Admin</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ url('/assets/media/image/favicon.png') }}" />

    <!-- Plugin styles -->
    <link rel="stylesheet" href="{{ url('/vendors/bundle.css') }}" type="text/css">

    @yield('head')

    <!-- App styles -->
    <link rel="stylesheet" href="{{ url('/assets/css/app.min.css') }}" type="text/css">

    <link rel="stylesheet" href="{{ url('/css/image-preview.css') }}" type="text/css">

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
            <div class="py-4 text-center" data-backround-image="{{ url('/assets/media/image/image1.jpg') }}">
                <figure class="avatar avatar-lg mb-3 border-0">
                    <img src="{{ url('/assets/media/image/user/women_avatar1.jpg') }}" class="rounded-circle" alt="image">
                </figure>
                <h5 class="d-flex align-items-center justify-content-center">{{ Auth::user()->name }}</h5>
                <div>
                    Balance: <strong>$500</strong>
                </div>
            </div>
            <div class="card mb-0 card-body shadow-none">
                <div class="mb-4">
                    <div class="list-group list-group-flush">
                        <a href="{{ route('logout') }}" class="list-group-item p-l-r-0 text-danger">Sign Out!</a>
                    </div>
                </div>
                <div class="mb-4">
                    <h6 class="d-flex justify-content-between">
                        Completed Tasks
                        <span class="float-right">%68</span>
                    </h6>
                    <div class="progress" style="height:5px;">
                        <div class="progress-bar bg-secondary" role="progressbar" style="width: 68%;" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
                <div class="mb-4">
                    <h6 class="d-flex justify-content-between">
                        Storage
                        <span>%25</span>
                    </h6>
                    <div class="progress" style="height: 5px;">
                        <div class="progress-bar bg-info" role="progressbar" style="width: 40%;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
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
                        <img class="logo" src="{{ url('/assets/media/image/logo.png') }}" alt="logo" style="width: 80%;">
                        <!-- <img class="logo-light" src="{{ url('/assets/media/image/logo-light.png') }}" alt="light logo"> -->
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
                                                        <span class="avatar-title bg-success-bright text-success rounded-circle">
                                                            <i class="ti-user"></i>
                                                        </span>
                                                    </figure>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <p class="mb-0 line-height-20 d-flex justify-content-between">
                                                        New customer registered
                                                        <i title="Mark as read" data-toggle="tooltip" class="hide-show-toggler-item fa fa-circle-o font-size-11"></i>
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
                                                        <span class="avatar-title bg-warning-bright text-warning rounded-circle">
                                                            <i class="ti-package"></i>
                                                        </span>
                                                    </figure>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <p class="mb-0 line-height-20 d-flex justify-content-between">
                                                        New Order Recieved
                                                        <i title="Mark as unread" data-toggle="tooltip" class="hide-show-toggler-item fa fa-check font-size-11"></i>
                                                    </p>
                                                    <span class="text-muted small">45 sec ago</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="list-group-item d-flex align-items-center hide-show-toggler">
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
                                                        <i title="Mark as unread" data-toggle="tooltip" class="hide-show-toggler-item fa fa-check font-size-11"></i>
                                                    </p>
                                                    <span class="text-muted small">55 sec ago</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="list-group-item d-flex align-items-center hide-show-toggler">
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
                                                        <i title="Mark as unread" data-toggle="tooltip" class="hide-show-toggler-item fa fa-check font-size-11"></i>
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
                        <section>
		<div class="lightblue-box">

		<nav class="navbar navbar-expand-lg navbar-light lightblue-box"">
            <div class="container">

                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">Iniciar Sesión</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">Registrarse</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">						
								<a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                       <font color="blue">Cerrar Sesión</font>
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

		</div>
	</section>
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
                            <a href="#" data-toggle="tooltip" data-placement="right" title="Image" data-nav-target="#images">
                                <i data-feather="shopping-bag"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" data-toggle="tooltip" data-placement="right" title="Doctor Manage" data-nav-target="#user">
                                <i data-feather="users"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" data-toggle="tooltip" data-placement="right" data-toggle="tooltip" data-placement="right" title="Service Offer" data-nav-target="#service">
                                <i data-feather="globe"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" data-toggle="tooltip" data-placement="right" title="Analytics" data-nav-target="#analytics">
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
                        <div id="images">
                            <ul>
                                <?php $count = count(Request::segments()); ?>
                                <!-- <li>{{ $count }}</li> -->
                                <li class="navigation-divider d-flex align-items-center">
                                    <i class="mr-2" data-feather="shopping-bag"></i> Media
                                </li>
                                <!-- <li>
                                <a @if(!request()->segment(1) || request()->segment(1) == 'ecommerce-dashboard') class="active"
                                   @endif href="{{ url('ecommerce-dashboard') }}">Dashboard</a></li> -->
                                <li>
                                    <a @if(request()->segment($count) == 'admin' || request()->segment($count) == 'media' || request()->segment($count) == 'logo') class="active"
                                        @endif href="{{ url('admin/media/logo') }}">Logos</a></li>
                                <li>
                                    <a @if(request()->segment($count) == 'image') class="active"
                                        @endif href="{{ url('admin/media/image') }}">Imagenes</a></li>
                                <li>
                                    <a @if(request()->segment($count) == 'video') class="active"
                                        @endif href="{{ url('admin/media/video') }}">Videos</a></li>
                                <li>
                                    <a @if(request()->segment($count) == 'partner') class="active"
                                        @endif href="{{ url('admin/media/partner') }}">Patrocinadores</a></li>

                                <li>
                                    <a @if(request()->segment($count) == 'benefit') class="active"
                                        @endif href="{{ url('admin/media/benefit') }}">Benefits</a></li>
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

                        <div id="user">
                            <ul>
                                <?php $count = count(Request::segments()); ?>
                                <li class="navigation-divider d-flex align-items-center">
                                    <i class="mr-2" data-feather="users"></i> Doctor Forms
                                </li>
                                <li>
                                    <a @if(request()->segment($count) == 'doctor') class="active"
                                        @endif href="{{ url('/admin/user/doctor') }}">Médicos</a></li>
                                <li>
                                    <a @if(request()->segment($count) == 'city') class="active"
                                        @endif href="{{ url('/admin/user/city') }}">Ciudades</a></li>
                                <li>
                                    <a @if(request()->segment($count) == 'speciality') class="active"
                                        @endif href="{{ url('/admin/user/speciality') }}">Especialidades</a></li>
                                <li>
                                    <a @if(request()->segment($count) == 'formation') class="active"
                                        @endif href="{{ url('/admin/user/formation') }}">Formación</a></li>
                                <li>
                                    <a @if(request()->segment($count) == 'type') class="active"
                                        @endif href="{{ url('/admin/user/type') }}">Tipo de Doctor</a></li>
                                <li>
                                    <a hidden @if(request()->segment($count) == 'type-list') class="active"
                                        @endif href="{{ url('/admin/user/type-list') }}"></a></li>
                                <li>
                                    <a hidden @if(request()->segment($count) == 'service') class="active"
                                        @endif href="{{ url('/admin/user/service') }}">Doctor Services</a></li>
                                <li>
                                    <a hidden @if(request()->segment($count) == 'service-list') class="active"
                                        @endif href="{{ url('/admin/user/service-list') }}"></a></li>
                                <li>
                                    <a @if(request()->segment($count) == 'add-doctor-user') class="active"
                                        @endif href="{{ url('/admin/user/add-doctor-user') }}">Add Usuario Profesional</a></li>
                                <li>
                                    <a @if(request()->segment($count) == 'doctor-user-list') class="active"
                                        @endif href="{{ url('/admin/user/doctor-user-list') }}">Listado Profesionales</a></li>
                                <li>
                                    <a @if(request()->segment($count) == 'contact-list') class="active"
                                        @endif href="{{ url('/admin/user/contact-list') }}">Mensajes Contacto</a></li>
                                <li>
                                    <a @if(request()->segment($count) == 'doctors-forms') class="active"
                                        @endif href="{{ url('/admin/user/doctors-forms') }}">Doctors Forms</a></li>
                                <li>
                                    <a hidden @if(request()->segment($count) == 'doctor-form-list') class="active"
                                        @endif href="{{ url('/admin/user/doctor-form-list') }}">Doctors Forms List</a></li>
                                <li>
                                    <a @if(request()->segment($count) == 'form-items') class="active"
                                        @endif href="{{ url('/admin/user/form-items') }}">Form Items</a></li>

                                <!-- <li>
                                <a @if(request()->segment(1) == 'user-list') class="active"
                                   @endif href="{{ url('user-list') }}">User List</a></li>
                            <li>
                                <a @if(request()->segment(1) == 'user-edit') class="active"
                                   @endif href="{{ url('user-edit') }}">User Edit</a></li> -->


                                <!-- <li class="navigation-divider">Users</li>
                            <li>
                                <div class="avatar-group ml-4">
                                    <figure class="avatar avatar-sm">
                                        <a href="#" title="Krisha McAlees" data-toggle="tooltip">
                                            <img src="{{ url('/assets/media/image/user/women_avatar4.jpg') }}" class="rounded-circle"
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
                                            <img src="{{ url('/assets/media/image/user/man_avatar3.jpg') }}" class="rounded-circle"
                                                 alt="avatar">
                                        </a>
                                    </figure>
                                    <figure class="avatar avatar-sm">
                                        <a href="#" title="Mellie Smittoune" data-toggle="tooltip">
                                            <img src="{{ url('/assets/media/image/user/man_avatar1.jpg') }}" class="rounded-circle"
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
                                            <img src="{{ url('/assets/media/image/user/women_avatar2.jpg') }}" class="rounded-circle"
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
                                            <img src="{{ url('/assets/media/image/user/women_avatar5.jpg') }}" class="rounded-circle"
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
                                            <img src="{{ url('/assets/media/image/user/man_avatar5.jpg') }}" class="rounded-circle"
                                                 alt="avatar">
                                        </a>
                                    </figure>
                                    <figure class="avatar avatar-sm">
                                        <a href="#" title="Mellie Smittoune" data-toggle="tooltip">
                                            <img src="{{ url('/assets/media/image/user/man_avatar2.jpg') }}" class="rounded-circle"
                                                 alt="avatar">
                                        </a>
                                    </figure>
                                    <figure class="avatar avatar-sm">
                                        <a href="#" title="Mahalia Lemme" data-toggle="tooltip">
                                            <span class="avatar-title bg-secondary rounded-circle">M</span>
                                        </a>
                                    </figure>
                                </div>
                            </li> -->
                            </ul>
                        </div>

                        <div id="service">
                            <ul>
                                <?php $count = count(Request::segments()); ?>
                                <li class="navigation-divider d-flex align-items-center">
                                    <i class="mr-2" data-feather="globe"></i> Service Manage
                                </li>
                                <li>
                                    <a @if(request()->segment($count) == 'services') class="active"
                                        @endif href="{{ route('service.manage') }}">Servicios Médicos</a></li>
                                <li>
                                    <a @if(request()->segment($count) == 'service_type') class="active"
                                        @endif href="{{ route('service.type') }}">Tipo de Servicio</a></li>
                                <li>
                                    <a @if(request()->segment($count) == 'tags') class="active"
                                        @endif href="{{ route('tags') }}">Etiquetas</a></li>
                                <li>
                                    <a @if(request()->segment($count) == 'insurance') class="active"
                                        @endif href="{{ route('insurance') }}">Seguros</a></li>
                                <li>
                                    <a hidden @if(request()->segment($count) == 'tags-list') class="active"
                                        @endif href="{{ route('tags-list') }}"></a></li>
                                <li>
                                    <a hidden @if(request()->segment($count) == 'insurance-list') class="active"
                                        @endif href="{{ route('insurance-list') }}"></a></li>
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

                <!-- end::footer -->

            </div>

        </div>

    </div>
    <!-- end::main -->

    <!-- Plugin scripts -->
    <script src="{{ url('/vendors/bundle.js') }}"></script>

    @yield('script')

    <!-- App scripts -->
    <script src="{{ url('/assets/js/app.min.js') }}"></script>

</body>

</html>