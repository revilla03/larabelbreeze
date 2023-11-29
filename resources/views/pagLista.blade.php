@extends('pagPlantilla')

@section('titulo')
    <h1 class ="display-4">Pagina lista</h1>
@endsection

@section('seccion')
    <h3>Lista</h3>
    <table class="table">
        <thead class="table-dark">
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Codigo</th>
                <th scope="col">Nombre</th>
                <th scope="col">Apellido</th>
                <th scope="col">Fecha de nacimiento</th>
            <tr>
    </thead>  
    <tbody>
         @foreach($xAlumno as $item)
         <tr>
              <th scope="row"> {{$item->id }}</th>
              <td>{{ $item ->codEst}}</td>
              <td>{{ $item ->namEst}}</td>
              <td>{{ $item ->apeEst}}</td>
              <td>{{ $item ->fnaEst}}</td>
        </tr>
         @endforeach
    </tbody>
    </table>
@endsection
