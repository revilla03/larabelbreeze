@extends('pagPlantilla')

@section('titulo')
    <h1 class ="display-4">Pagina lista</h1>
@endsection

@section('seccion')
    <h3> Detalle estudiante </h3>

    <p>Id:                      {{ $xDetAlumnos->id }} <p> 
    <p>Codigo:                  {{ $xDetAlumnos->codEst }} <p>
    <p>Apellidos y nombres:     {{ $xDetAlumnos->apeEst}},{{$xDetAlumnos->namEst}} <p>
    <p>Fecha de nacimiento:     {{ $xDetAlumnos->fnaEst }} <p>
    <p>Turno:                   {{ $xDetAlumnos->turMat}} <p>
    <p>Semestre:                {{ $xDetAlumnos->semMat}} <p>
    <p>Estado de matricula:     {{ $xDetAlumnos->estMat}} <p>
@endsection