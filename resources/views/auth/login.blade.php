@extends('layouts.auth')

@section('content')

    <!-- logo -->
    <div id="logo">
        <img class="logo" src="{{ url('public/assets/media/image/logo_small.png') }}" style="width:80%" alt="image">
        <img class="logo-dark" src="{{ url('public/assets/media/image/logo-dark.png') }}" alt="image">
    </div>
    <!-- ./ logo -->

    <h5>Sign in</h5>

    <!-- form -->
    <form>
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Enter your email" required autofocus>
        </div>
        <div class="form-group">
            <input type="password" class="form-control" placeholder="Password" required>
        </div>
        <div class="form-group d-flex justify-content-between">
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" checked="" id="customCheck1">
                <label class="custom-control-label" for="customCheck1">Remember me</label>
            </div>
            
        </div>
        <button class="btn btn-primary btn-block">Sign in</button>
        <!-- <hr>
        <p class="text-muted">Login with your social media account.</p>
        <ul class="list-inline">
            <li class="list-inline-item">
                <a href="#" class="btn btn-floating btn-facebook">
                    <i class="fa fa-facebook"></i>
                </a>
            </li>
            <li class="list-inline-item">
                <a href="#" class="btn btn-floating btn-dribbble">
                    <i class="fa fa-dribbble"></i>
                </a>
            </li>
            <li class="list-inline-item">
                <a href="#" class="btn btn-floating btn-google">
                    <i class="fa fa-google"></i>
                </a>
            </li>
        </ul> -->
        <hr>
        <p class="text-muted">Don't have an account?</p>
        <a href="{{ url('/'). '#register_befenift' }}" class="btn btn-outline-light btn-sm">Register now!</a>
    </form>
    <!-- ./ form -->

@endsection
