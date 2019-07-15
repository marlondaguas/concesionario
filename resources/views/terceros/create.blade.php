@extends('terceros.layout')

@section('content')

<h1 class="text-center">Agregar Tercero</h1>
<hr>
@if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
@endif
<div class="container">

<form action="{{ route('terceros.store') }}" method="POST">
@csrf

<div class="row">
        <div class="col-md-7">
             <div class="form-group">
                <input type="text" name="cedula" class="form-control" placeholder="Cedula" autofocus>
             </div>
        </div>
        <div class="col-md-7">
            <div class="form-group">
                <input type="text" name="nombres" class="form-control" placeholder="Nombres">
            </div>
        </div>
        <div class="col-md-7">
            <div class="form-group">
                <input type="text" name="apellidos" class="form-control" placeholder="Apellidos">
            </div>
        </div>
        <div class="col-md-7">
            <div class="form-group">
                <input type="text" name="contacto" class="form-control" placeholder="Contacto">
            </div>
        </div>
        <div class="col-md-7 text-center">
            <button type="submit" class="btn btn-primary">Agregar</button>
        </div>
</div>

</form>

</div>

@endsection