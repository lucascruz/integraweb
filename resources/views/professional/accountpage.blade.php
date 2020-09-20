@section('content')

@extends('layouts.app_professional')

@section('pageTitle', 'Cuenta Profesional')

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
            <h6 class="m-0 font-weight-bold text-primary">Datos del Profesional</h6>
        </div>
        <div class="card-body">

            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead class="thead-dark">
                        <tr>
                            <th>Nombre</th>
                            <th>Numero de Contacto</th>
                            <th>Ciudad</th>
                            <th>Email</th>
                            <th>Actualizar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{ Auth::user()->name }}</td>
                            <td>{{ Auth::user()->cel }}</td>
                            <td>{{ Auth::user()->city }}</td>
                            <td>{{ Auth::user()->email }}</td>
                            <td>
                                <a href="{{route('edit-account' , Auth::user()->id)}}" class="btn btn-warning">Editar</a>
                                <form action="#" method="POST" class="d-inline">
                                </form>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
@endsection