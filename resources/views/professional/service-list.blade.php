@section('content')

@extends('layouts.app_professional')

@section('pageTitle', 'Servicios')

@section('head')
<!-- Datatable -->
<link rel="stylesheet" href="{{ url('public/vendors/dataTable/datatables.min.css') }}" type="text/css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
@endsection

@section('content')
<h1>SERVICE LIST</h1>

<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <thead class="thead-dark">
        <tr>
            <th>Doctor Id</th>
            <th>Service Id</th>
            <th>Price Face to Face</th>
            <th>Price Telemedicina</th>
            <th>Price Other</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($services as $item)
        <tr>
            <td>{{$item->doctor_id}}</td>
            <td>{{$item->services_id}}</td>
            <td>{{$item->price1}}</td>
            <td>{{$item->price2}}</td>
            <td>{{$item->price3}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection