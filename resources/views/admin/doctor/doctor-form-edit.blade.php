@extends('layouts.app_admin')

@section('pageTitle', 'Edit Doctor Form')

@section('head')
<!-- Datatable -->
<link rel="stylesheet" href="{{ url('public/vendors/dataTable/datatables.min.css') }}" type="text/css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
@endsection

@section('content')

<body>
    <!-- End of Topbar -->

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Edit Doctor Form</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <form action="{{route('updateDoctorForm' , $doctorformActualizar->id)}}" method="POST">
                                @method('PUT')
                                @csrf

                                <div class="form-group">
                                    <label for="tag">Title</label>
                                    <input type="text" class="form-control" name="title" id="title" value="{{$doctorformActualizar->title}}" required>
                                </div>

                                <div class="form-group">
                                    <label for="tag">Intro Text</label>
                                    <input type="text" class="form-control" name="intro_text" id="intro_text" value="{{$doctorformActualizar->intro_text}}" required>
                                </div>

                                <button type="submit" class="btn btn-warning">Save</button>
                                <a>
                                    <a>
                                        <a href="{{URL::route('doctor-form-list')}}" class="btn btn-danger">Back</a>
                            </form>
                            @if (session('updateDoctorForm'))
                            <div class="alert alert-success mt-3">
                                {{session('updateDoctorForm')}}
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
</body>

</html>

@endsection