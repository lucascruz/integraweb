@extends('layouts.app_admin')

@section('pageTitle', 'Doctor Service Edit')

@section('head')
<!-- Datatable -->
<link rel="stylesheet" href="{{ url('/vendors/dataTable/datatables.min.css') }}" type="text/css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

@endsection

@section('content')

<body>
    <p>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Edit Doctor Service</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <form action="{{route('updateService' , $serviceActualizar->id)}}" method="POST">
                                    @method('PUT')
                                    @csrf

                                    <div class="form-group">
                                        <label for="seguro">Médico</label>
                                        <select class="form-control" name="doctor_id" id="doctor_id" value="{{$serviceActualizar->doctor_id}}">
                                            @foreach ($doctors as $doctor)
                                            <option value="{{ $doctor['id'] }}">{{ $doctor['name'] }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="seguro">Service</label>
                                        <select class="form-control" name="services_id" id="services_id" value="{{$serviceActualizar->services_id}}">
                                            @foreach ($services as $service)
                                            <option value="{{ $service['id'] }}">{{ $service['title'] }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="price1">Price 1 Face to Face</label>
                                        <input type="number" class="form-control" name="price1" id="price1" value="{{$serviceActualizar->price1}}">
                                    </div>

                                    <div class="form-group">
                                        <label for="title">Price 2 Telemedicine</label>
                                        <input type="number" class="form-control" name="price2" id="price2" value="{{$serviceActualizar->price2}}">
                                    </div>

                                    <div class="form-group">
                                        <label for="title">Price 3 Other</label>
                                        <input type="number" class="form-control" name="price3" id="price3" value="{{$serviceActualizar->price3}}">
                                    </div>

                                    <button type="submit" class="btn btn-warning">Save</button>
                                    <a>
                                        <a>
                                            <a href="{{URL::route('service-list')}}" class="btn btn-danger">Back</a>
                                </form>
                                @if (session('updateService'))
                                <div class="alert alert-success mt-3">
                                    {{session('updateService')}}
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