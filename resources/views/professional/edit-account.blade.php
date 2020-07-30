@section('content')

@extends('layouts.app_professional')

@section('pageTitle', 'Professional Account')

@section('head')
<!-- Datatable -->
<link rel="stylesheet" href="{{ url('public/vendors/dataTable/datatables.min.css') }}" type="text/css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
@endsection

@section('content')
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <thead>
        <form action="{{route('updateAccount' , $accountActualizar->id)}}" method="POST">
            @method('PUT')
            @csrf

            <div class="form-group">
                <label for="tag">Professional Name</label>
                <input type="text" class="form-control" name="name" id="name" value="{{$accountActualizar->name}}" required>
            </div>

            <div class="form-group">
                <label for="tag">Email</label>
                <input type="text" class="form-control" name="email" id="email" value="{{$accountActualizar->email}}" required>
            </div>

            <div class="form-group">
                <label for="tag">New Password</label>
                <input type="password" pattern=".{6,}" class="form-control" name="password" id="password" value="{{$accountActualizar->password}}" required>
            </div>

            <button type="submit" class="btn btn-warning">Save</button>
            <a>
                <a>
                    <a href="{{URL::route('account')}}" class="btn btn-danger">Back</a>
        </form>
        @if (session('updateAccount')) 
        <div class="alert alert-success mt-3">
            {{session('updateAccount')}}
        </div>
        @endif
        </tbody>
</table>
@endsection