@extends('layouts.app_admin')

@section('pageTitle', 'Add Tags')

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
      <h6 class="m-0 font-weight-bold text-primary">Add Tags</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <form action="{{route('storeTag')}}" method="POST">
              @csrf

              <div class="form-group">
                <label for="title">Tag Name</label>
                <input type="text" class="form-control" name="tag" id="tag" value="{{old('tag')}}" required>
              </div>

              <button type="submit" class="btn btn-primary">Add</button>
              <a>
                <a>
                  <a href="{{URL::route('tags-list')}}" class="btn btn-success">List</a>
                  <a>
                    <a>
            </form>
            @if (session('agregarTag'))
            <div class="alert alert-success mt-3">
              {{session('agregarTag')}}
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