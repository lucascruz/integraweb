@extends('layouts.app')

@section('pageTitle', 'Clients')

@section('content')

    <div class="page-header justify-content-between">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{ url('/') }}">Projects</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Clients</li>
            </ol>
        </nav>
        <div class="dropdown">
            <a href="#" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                <i class="ti-settings mr-1"></i> Actions
            </a>
            <div class="dropdown-menu dropdown-menu-right">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">

            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex">
                                <div>
                                    <figure class="avatar mr-3">
                                        <span class="avatar-title bg-secondary rounded-circle">S</span>
                                    </figure>
                                </div>
                                <div>
                                    <a href="#">Shirley Ingerman</a>
                                    <p class="text-muted">Architecture Company</p>
                                </div>
                            </div>
                            <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti, expedita?</p>
                            <div class="card border shadow-none">
                                <div class="card-body pt-2 pb-2 text-muted">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item d-flex justify-content-between pl-0 pr-0">
                                            <span>Email:</span>
                                            <span>russotry@russo.com</span>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between pl-0 pr-0">
                                            <span>Location:</span>
                                            <span>New York, USA</span>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between pl-0 pr-0">
                                            <span>Contact:</span>
                                            <span>+1 123 456 789</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <ul class="list-inline text-center">
                                <li class="list-inline-item">
                                    <a href="#" class="btn btn-primary" title="Chat" data-toggle="tooltip">
                                        <i class="fa fa-comment-o"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#" class="btn btn-primary" title="Profile" data-toggle="tooltip">
                                        <i class="fa fa-user-o"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#" class="btn btn-primary" title="Project" data-toggle="tooltip">
                                        <i class="fa fa-link"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex">
                                <div>
                                    <figure class="avatar mr-3">
                                        <img src="{{ url('assets/media/image/user/man_avatar1.jpg') }}"
                                             class="rounded-circle"
                                             alt="avatar">
                                    </figure>
                                </div>
                                <div>
                                    <a href="#">Lisetta Muehler</a>
                                    <p class="text-muted">Building company</p>
                                </div>
                            </div>
                            <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti, expedita?</p>
                            <div class="card border shadow-none">
                                <div class="card-body pt-2 pb-2 text-muted">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item d-flex justify-content-between pl-0 pr-0">
                                            <span>Email:</span>
                                            <span>russotry@russo.com</span>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between pl-0 pr-0">
                                            <span>Location:</span>
                                            <span>New York, USA</span>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between pl-0 pr-0">
                                            <span>Contact:</span>
                                            <span>+1 123 456 789</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <ul class="list-inline text-center">
                                <li class="list-inline-item">
                                    <a href="#" class="btn btn-primary" title="Chat" data-toggle="tooltip">
                                        <i class="fa fa-comment-o"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#" class="btn btn-primary" title="Profile" data-toggle="tooltip">
                                        <i class="fa fa-user-o"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#" class="btn btn-primary" title="Project" data-toggle="tooltip">
                                        <i class="fa fa-link"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex">
                                <div>
                                    <figure class="avatar mr-3">
                                        <img src="{{ url('assets/media/image/user/women_avatar2.jpg') }}"
                                             class="rounded-circle"
                                             alt="avatar">
                                    </figure>
                                </div>
                                <div>
                                    <a href="#">Teddi Rielly</a>
                                    <p class="text-muted">Mobile Application Company</p>
                                </div>
                            </div>
                            <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti, expedita?</p>
                            <div class="card border shadow-none">
                                <div class="card-body pt-2 pb-2 text-muted">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item d-flex justify-content-between pl-0 pr-0">
                                            <span>Email:</span>
                                            <span>russotry@russo.com</span>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between pl-0 pr-0">
                                            <span>Location:</span>
                                            <span>New York, USA</span>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between pl-0 pr-0">
                                            <span>Contact:</span>
                                            <span>+1 123 456 789</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <ul class="list-inline text-center">
                                <li class="list-inline-item">
                                    <a href="#" class="btn btn-primary" title="Chat" data-toggle="tooltip">
                                        <i class="fa fa-comment-o"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#" class="btn btn-primary" title="Profile" data-toggle="tooltip">
                                        <i class="fa fa-user-o"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#" class="btn btn-primary" title="Project" data-toggle="tooltip">
                                        <i class="fa fa-link"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex">
                                <div>
                                    <figure class="avatar mr-3">
                                        <img src="{{ url('assets/media/image/user/man_avatar2.jpg') }}"
                                             class="rounded-circle"
                                             alt="avatar">
                                    </figure>
                                </div>
                                <div>
                                    <a href="#">Elnore McCrillis</a>
                                    <p class="text-muted">Design Company</p>
                                </div>
                            </div>
                            <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti, expedita?</p>
                            <div class="card border shadow-none">
                                <div class="card-body pt-2 pb-2 text-muted">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item d-flex justify-content-between pl-0 pr-0">
                                            <span>Email:</span>
                                            <span>russotry@russo.com</span>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between pl-0 pr-0">
                                            <span>Location:</span>
                                            <span>New York, USA</span>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between pl-0 pr-0">
                                            <span>Contact:</span>
                                            <span>+1 123 456 789</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <ul class="list-inline text-center">
                                <li class="list-inline-item">
                                    <a href="#" class="btn btn-primary" title="Chat" data-toggle="tooltip">
                                        <i class="fa fa-comment-o"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#" class="btn btn-primary" title="Profile" data-toggle="tooltip">
                                        <i class="fa fa-user-o"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#" class="btn btn-primary" title="Project" data-toggle="tooltip">
                                        <i class="fa fa-link"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex">
                                <div>
                                    <figure class="avatar mr-3">
                                        <img src="{{ url('assets/media/image/user/women_avatar3.jpg') }}"
                                             class="rounded-circle"
                                             alt="avatar">
                                    </figure>
                                </div>
                                <div>
                                    <a href="#">Hilton Dew</a>
                                    <p class="text-muted">Private Company</p>
                                </div>
                            </div>
                            <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti, expedita?</p>
                            <div class="card border shadow-none">
                                <div class="card-body pt-2 pb-2 text-muted">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item d-flex justify-content-between pl-0 pr-0">
                                            <span>Email:</span>
                                            <span>russotry@russo.com</span>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between pl-0 pr-0">
                                            <span>Location:</span>
                                            <span>New York, USA</span>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between pl-0 pr-0">
                                            <span>Contact:</span>
                                            <span>+1 123 456 789</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <ul class="list-inline text-center">
                                <li class="list-inline-item">
                                    <a href="#" class="btn btn-primary" title="Chat" data-toggle="tooltip">
                                        <i class="fa fa-comment-o"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#" class="btn btn-primary" title="Profile" data-toggle="tooltip">
                                        <i class="fa fa-user-o"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#" class="btn btn-primary" title="Project" data-toggle="tooltip">
                                        <i class="fa fa-link"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex">
                                <div>
                                    <figure class="avatar mr-3">
                                        <img src="{{ url('assets/media/image/user/man_avatar3.jpg') }}"
                                             class="rounded-circle"
                                             alt="avatar">
                                    </figure>
                                </div>
                                <div>
                                    <a href="#">Gifford Rosenwald</a>
                                    <p class="text-muted">Software company</p>
                                </div>
                            </div>
                            <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti, expedita?</p>
                            <div class="card border shadow-none">
                                <div class="card-body pt-2 pb-2 text-muted">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item d-flex justify-content-between pl-0 pr-0">
                                            <span>Email:</span>
                                            <span>russotry@russo.com</span>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between pl-0 pr-0">
                                            <span>Location:</span>
                                            <span>New York, USA</span>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between pl-0 pr-0">
                                            <span>Contact:</span>
                                            <span>+1 123 456 789</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <ul class="list-inline text-center">
                                <li class="list-inline-item">
                                    <a href="#" class="btn btn-primary" title="Chat" data-toggle="tooltip">
                                        <i class="fa fa-comment-o"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#" class="btn btn-primary" title="Profile" data-toggle="tooltip">
                                        <i class="fa fa-user-o"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#" class="btn btn-primary" title="Project" data-toggle="tooltip">
                                        <i class="fa fa-link"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <nav aria-label="..." class="mb-4">
                <ul class="pagination pagination-rounded justify-content-center">
                    <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1" aria-disabled="true">
                            <i class="ti-angle-left"></i>
                        </a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item active" aria-current="page">
                        <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#">
                            <i class="ti-angle-right"></i>
                        </a>
                    </li>
                </ul>
            </nav>

        </div>
    </div>

@endsection

@section('script')

    <!-- Apex chart -->
    <script src="{{ url('/vendors/charts/apex/apexcharts.min.js') }}"></script>

    <!-- Chartjs -->
    <script src="{{ url('/vendors/charts/chartjs/chart.min.js') }}"></script>

    <!-- Circle progress -->
    <script src="{{ url('/vendors/circle-progress/circle-progress.min.js') }}"></script>

    <!-- Datepicker -->
    <script src="{{ url('/vendors/datepicker/daterangepicker.js') }}"></script>

    <!-- Peity -->
    <script src="{{ url('/vendors/charts/peity/jquery.peity.min.js') }}"></script>
    <script src="{{ url('/assets/js/examples/charts/peity.js') }}"></script>

    <!-- Dashboard scripts -->
    <script src="{{ url('/assets/js/examples/dashboard.js') }}"></script>
    <div class="colors"> <!-- To use theme colors with Javascript -->
        <div class="bg-primary"></div>
        <div class="bg-primary-bright"></div>
        <div class="bg-secondary"></div>
        <div class="bg-secondary-bright"></div>
        <div class="bg-info"></div>
        <div class="bg-info-bright"></div>
        <div class="bg-success"></div>
        <div class="bg-success-bright"></div>
        <div class="bg-danger"></div>
        <div class="bg-danger-bright"></div>
        <div class="bg-warning"></div>
        <div class="bg-warning-bright"></div>
    </div>

@endsection
