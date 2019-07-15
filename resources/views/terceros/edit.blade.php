@extends('terceros.layout')

@section('content')

<h1 class="text-center">Agregar Tercero</h1>
<hr>
@if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

<div class="container">

<form action="{{ route('terceros.update', $tercero->cedula) }}" method="POST">
@csrf
@method('PUT')

<div class="row">
        <div class="col-md-7">
             <div class="form-group">
                <input type="text" name="cedula"  value="{{ $tercero->cedula }}" class="form-control" placeholder="Cedula" autofocus>
             </div>
        </div>
        <div class="col-md-7">
            <div class="form-group">
                <input type="text" name="nombres" value="{{ $tercero->nombres }}" class="form-control" placeholder="Nombres">
            </div>
        </div>
        <div class="col-md-7">
            <div class="form-group">
                <input type="text" name="apellidos" value="{{ $tercero->apellidos }}" class="form-control" placeholder="Apellidos">
            </div>
        </div>
        <div class="col-md-7">
            <div class="form-group">
                <input type="text" name="contacto" value="{{ $tercero->contacto }}" class="form-control" placeholder="Contacto">
            </div>
        </div>
        <div class="col-md-7 text-center">
            <button type="submit" class="btn btn-primary">Agregar</button>
        </div>
</div>

</form>

</div>

@endsection