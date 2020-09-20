@section('content')

@extends('layouts.app_professional')

@section('pageTitle', 'Servicios')

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
            <h6 class="m-0 font-weight-bold text-primary">Agregar Servicio Profesional</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <form action="{{route('storeService')}}" method="POST">
                            @csrf

                            <div class="form-group">
                                <input id="doctor_id" type="hidden" class="form-control" name="doctor_id" value="{{ Auth::user()->id }}" required>
                            </div>

                            <div class="form-group">
                                <label for="seguro">Servicio</label>
                                <select class="form-control" name="services_id" id="services_id" value="{{old('services_id')}}">
                                    <option>--- Escoja el Tipo de Servicio ---</option>
                                    @foreach ($services as $service)
                                    <option value="{{ $service['id'] }}">{{ $service['title'] }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="title">Precio Presencial</label>
                                <input type="number" class="form-control" name="price1" id="price1" value="{{old('price1')}}" required>
                            </div>

                            <div class="form-group">
                                <label for="title">Precio Telemedicina</label>
                                <input type="number" class="form-control" name="price2" id="price2" value="{{old('price2')}}" required>
                            </div>

                            <div class="form-group">
                                <label for="title">Precio Otro</label>
                                <input type="number" class="form-control" name="price3" id="price3" value="{{old('price3')}}" required>
                            </div>

                            <button type="submit" class="btn btn-primary">Agregar</button>
                            <a>
                                <a>
                                    <a href="{{route('service-list' , Auth::user()->id)}}" class="btn btn-success">Listado</a>
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