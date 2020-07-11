<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nago - Admin & Dashboard HTML Template</title>

    <!-- Favicon -->
    <!-- <link rel="shortcut icon" href="{{ url('public/assets/media/image/favicon.png') }}"/> -->

    <!-- Plugin styles -->
    <link rel="stylesheet" href="{{ url('public/vendors/bundle.css') }}" type="text/css">

    <!-- App styles -->
    <link rel="stylesheet" href="{{ url('public/assets/css/app.min.css') }}" type="text/css">
</head>
<body class="form-membership">

<!-- begin::preloader-->
<div class="preloader">
    <div class="preloader-icon"></div>
</div>
<!-- end::preloader -->

<div class="form-wrapper">

    @yield('content')

</div>

<!-- Plugin scripts -->
<script src="{{ url('public/vendors/bundle.js') }}"></script>

<!-- App scripts -->
<script src="{{ url('public/assets/js/app.min.js') }}"></script>
</body>
</html>