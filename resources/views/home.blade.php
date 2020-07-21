@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">PERFIL DEL USUARIO</div>
                <div class="card-header bg-primary text-white">Bienvenid@ <h4>{{ Auth::user()->name }}</h4></div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a href="{{ route('patient_account') }}" class="btn btn-primary btn-user btn-block">MIS CITAS MÉDICAS</a>
                    <a class="btn btn-danger btn-user btn-block" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('CERRAR SESIÓN') }}
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection