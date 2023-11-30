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
                <th scope="col">Apellidos y nombres</th>
                <th scope="col">Fecha de nacimiento</th>
                <th scope="col">Turno</th>
                <th scope="col">Semestre</th>
                <th scope="col">Estado de matricula</th>
            <tr>
    </thead>  
    <tbody>
         @foreach($xAlumnos as $item)
         <tr>
              <th scope="row"> {{$item->id }}</th>
              <td>{{ $item ->codEst}}</td>
            
              <td>
                <a href="{{route ('Estudiante.xDetalle',$item->id)}}">
                    {{$item->apeEst }},{{$item->namEst}}
                </a>
              </td>
              <td>{{ $item ->fnaEst}}</td>
        </tr>
         @endforeach
    </tbody>
    </table>
@endsection
