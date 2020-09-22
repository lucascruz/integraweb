<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width , initial-scale=1" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <title>Telemedicina Colombia</title>
    
    <link rel="shortcut icon" href="{{ url('/favicon.png') }}" type="image/png">
	<link rel="stylesheet" type="text/css" href="{{ url('/css/style.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ url('/css/bootstrap.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ url('/css/owl.carousel.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ url('/css/font-awesome.min.css') }}">
 	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    
    <link rel="stylesheet" href="{{ url('/vendors/select2/css/select2.min.css') }}" type="text/css">
</head>

<body>
    @yield('content')
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="	sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script type="text/javascript" src="{{ url('/js/owl.carousel.min.js') }}"></script>

    <script src="{{ url('/vendors/select2/js/select2.min.js') }}"></script>
    <script src="{{ url('/assets/js/examples/select2.js') }}"></script>
    @yield('custom_js')
</body>

</html>
