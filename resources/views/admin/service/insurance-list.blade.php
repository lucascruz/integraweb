@extends('layouts.app_admin')

@section('pageTitle', 'Insurance List')

@section('head')
<!-- Datatable -->
<link rel="stylesheet" href="{{ url('/vendors/dataTable/datatables.min.css') }}" type="text/css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

@endsection

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Insurance List</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead class="thead-dark">
            <tr>
              <th>Name</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($insurance as $item)
            <tr>
              <td>{{$item->name}}</td>
              <td>
                <a href="{{route('insurance-edit' , $item->id)}}" class="btn btn-warning">Edit</a>
                <form action="{{route('eliminarInsurance' , $item->id)}}" method="POST" class="d-inline">
                  @method('DELETE')
                  @csrf
                  <button type="submit" class="btn btn-danger">Delete</button>
                </form>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
        <a href="{{URL::route('insurance')}}" class="btn btn-danger">Back</a>
        @if (session('eliminarInsurance'))
        <div class="alert alert-success mt-3">
          {{session('eliminarInsurance')}}
        </div>
        @endif
        {{$insurance->links()}}
      </div>
    </div>
  </div>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
@endsection