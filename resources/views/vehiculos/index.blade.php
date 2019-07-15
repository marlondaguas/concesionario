@extends('terceros.layout')

@section('content')

<h1 class="text-center">Vehiculos</h1>

<div class="container">

<a class="btn btn-info mb-1" href="{{ route('vehiculos.create') }}">Agregar Vehiculo</a>

<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">VIN</th>
      <th scope="col">Placa</th>
      <th scope="col">Modelo</th>
      <th scope="col">Año</th>
      <th scope="col">Color</th>
      <th scope="col">Kilometraje</th>
      <th scope="col">Tercero</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>
    @foreach($vehiculos as $vehiculo)
    <tr>
      <th scope="row">{{ $vehiculo->vin }}</th>
      <td>{{ $vehiculo->placa }}</td>
      <td>{{ $vehiculo->modelo }}</td>
      <td>{{ $vehiculo->año }}</td>
      <td>{{ $vehiculo->color }}</td>
      <td>{{ $vehiculo->kilometraje }}</td>
      <td>{{ $vehiculo->tercero }}</td>
      <td> <a class="btn btn-info" href="{{ route('vehiculos.edit', $vehiculo->vin) }}">Editar</a>
        <form action="{{ route('vehiculos.destroy', $vehiculo->vin) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn-sm btn-danger mt-2" onclick="return confirm('¿Quiere borrar el registro?')">Eliminar</button>
        </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>

{{ $vehiculos->links() }}

</div>

@endsection