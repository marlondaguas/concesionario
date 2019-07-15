@extends('terceros.layout')

@section('content')

<h1 class="text-center">Agregar Vehiculos</h1>
<hr>

@if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

<div class="container">

<form action="{{ route('vehiculos.store') }}" method="POST">
@csrf

<div class="row">
        <div class="col-md-7">
             <div class="form-group">
                <input type="text" name="vin" class="form-control" placeholder="VIN" autofocus>
             </div>
        </div>
        <div class="col-md-7">
            <div class="form-group">
                <input type="text" name="placa" class="form-control" placeholder="Placa">
            </div>
        </div>
        <div class="col-md-7">
            <div class="form-group">
                <input type="text" name="modelo" class="form-control" placeholder="Modelo">
            </div>
        </div>
        <div class="col-md-7">
            <div class="form-group">
                <input type="text" name="año" class="form-control" placeholder="Año">
            </div>
        </div>
        <div class="col-md-7">
            <div class="form-group">
                <input type="text" name="color" class="form-control" placeholder="Color">
            </div>
        </div>
        <div class="col-md-7">
            <div class="form-group">
                <input type="text" name="kilometraje" class="form-control" placeholder="Kilometraje">
            </div>
        </div>
        <div class="col-md-7">
            <div class="form-group">
                <input type="text" name="terceroasignado" class="form-control" placeholder="Tercero">
            </div>
        </div>
        <div class="col-md-7 text-center">
            <button type="submit" class="btn btn-primary">Agregar</button>
        </div>
</div>

</form>

</div>

@endsection