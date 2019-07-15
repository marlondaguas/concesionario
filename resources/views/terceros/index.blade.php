@extends('terceros.layout')

@section('content')

<h1 class="text-center">Terceros</h1>

<div class="container">

<a class="btn btn-info mb-1" href="{{ route('terceros.create') }}">Agregar</a>

<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Cedula</th>
      <th scope="col">Nombres</th>
      <th scope="col">Apellidos</th>
      <th scope="col">Contacto</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>
    @foreach($terceros as $tercero)
    <tr>
      <th scope="row">{{ $tercero->cedula }}</th>
      <td>{{ $tercero->nombres }}</td>
      <td>{{ $tercero->apellidos }}</td>
      <td>{{ $tercero->contacto }}</td>
      <td> <a class="btn btn-info" href="{{ route('terceros.edit', $tercero->cedula) }}">Editar</a> 
        <form action="{{ route('terceros.destroy', $tercero->cedula) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn-sm btn-danger mt-2" onclick="return confirm('¿Quiere borrar el registro?')">Eliminar</button>
        </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>

{{ $terceros->links() }}

</div>

@endsection