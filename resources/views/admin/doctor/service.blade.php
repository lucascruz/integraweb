@extends('layouts.app_admin')

@section('pageTitle', 'Add Doctor Service')

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
            <h6 class="m-0 font-weight-bold text-primary">Add Doctor Service Type</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <form action="{{route('storeService')}}" method="POST">
                            @csrf

                            <div class="form-group">
                                <label for="seguro">Médico</label>
                                <select class="form-control" name="doctor_id" id="doctor_id" value="{{old('doctor_id')}}">
                                    <option>--- Escoja el Médico ---</option>
                                    @foreach ($doctors as $doctor)
                                    <option value="{{ $doctor['id'] }}">{{ $doctor['name'] }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="seguro">Service</label>
                                <select class="form-control" name="services_id" id="services_id" value="{{old('services_id')}}">
                                    <option>--- Escoja el Tipo de Servicio ---</option>
                                    @foreach ($services as $service)
                                    <option value="{{ $service['id'] }}">{{ $service['title'] }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="title">Price Face to Face</label>
                                <input type="number" class="form-control" name="price1" id="price1" value="{{old('price1')}}" required>
                            </div>

                            <div class="form-group">
                                <label for="title">Price 2 Telemedicina</label>
                                <input type="number" class="form-control" name="price2" id="price2" value="{{old('price2')}}" required>
                            </div>

                            <div class="form-group">
                                <label for="title">Price 3 Other</label>
                                <input type="number" class="form-control" name="price3" id="price3" value="{{old('price3')}}" required>
                            </div>

                            <button type="submit" class="btn btn-primary">Add</button>
                            <a>
                                <a>
                                    <a href="{{URL::route('service-list')}}" class="btn btn-success">List</a>
                                    <a>
                                        <a>
                        </form>
                        @if (session('agregarService'))
                        <div class="alert alert-success mt-3">
                            {{session('agregarService')}}
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