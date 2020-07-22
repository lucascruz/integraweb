@extends('layouts.app_admin')

@section('pageTitle', 'Add Insurance')

@section('head')
<!-- Datatable -->
<link rel="stylesheet" href="{{ url('public/vendors/dataTable/datatables.min.css') }}" type="text/css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

@endsection

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Add Insurance</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <form action="{{route('storeInsurance')}}" method="POST">
              @csrf

              <div class="form-group">
                <label for="title">Name</label>
                <input type="text" class="form-control" name="name" id="name" value="{{old('name')}}" required>
              </div>

              <button type="submit" class="btn btn-primary">Add</button>
              <a>
                <a>
                  <a href="{{URL::route('insurance-list')}}" class="btn btn-success">List</a>
                  <a>
                    <a>
                      <a href="{{URL::route('service.manage')}}" class="btn btn-danger">Back</a>
            </form>
            @if (session('agregarInsurance'))
            <div class="alert alert-success mt-3">
              {{session('agregarInsurance')}}
            </div>
            @endif
            </tbody>
        </table>
      </div>
    </div>
  </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
@endsection