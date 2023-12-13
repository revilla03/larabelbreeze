@extends('pagPlantilla')

@section('titulo')
    <h1 class="display-4"> Página seguimiento</h1>
    <h1 class="display-4"> Evaluacion-Unidad III </h1>
@endsection

@section('seccion')
    @if(session('msj'))
        <div class="alert alert-succes alert-dismissible fade show" role="alert">
            {{session('msj')}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" arial-label="close"></button>
        </div>
    @endif

    <form action="{{ route('Estudiante.xRegistrar') }}" method="post" class="d-grid gap-2">
        @csrf

        @error('codEst')
            <div class="alert alert-danger">
                El código es requerido
            </div>
        @enderror

        @error('nomEst')
            <div class="alert alert-danger">
                El nombre es requerido
            </div>
        @enderror

        @if($errors ->has('apeEst'))
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                El <strong>apellido</strong>es requerido
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <input type="text" name="idSeg" placeholder="Id de seguimiento"  value="{{ old('codEst') }}" class="form-control mb-2">
        <select name="traAct" class="form-control mb-2">
            <option value="">Trabaja actualmente...</option>
            <option value="0">SI</option>
            <option value="1">No</option>
        </select>
        <select name="ofiAct" class="form-control mb-2">
            <option value="">Seleccione oficio actual...</option>
            <option value="1">1 cp</option>
            <option value="2">2 cp</option>
            <option value="3">3 cp</option>
            <option value="4">4 cp</option>
            <option value="5">5 cp</option>
            <option value="6">6 cp</option>
            <option value="7">7 cp</option>
            <option value="8">8 cp</option>
            <option value="9">9 cp</option>
            <option value="10">10 cp</option>
            <option value="11">11 cp</option>
        </select>
        <input type="date" name="fecSeg" placeholder="Fecha Seg."  value="{{ old('fnaEst') }}" class="form-control mb-2">
        <select name="estSeg" class="form-control mb-2">
            <option value="">Seleccione su estado actual...</option>
            <option value="0">Activo</option>
            <option value="1">Inactivo</option>
        </select>

        <button class="btn btn-primary btn-block" type="submit">Agregar</button>
    </form>

    <br>
    <div class="btn btn-dark fs-3 fw-bold d-grid">Lista de seguimiento</div>
    <table class="table">
        <thead class="table-secondary">
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Código</th>
                <th scope="col">Trabajo actual</th>
                <th scope="col">Handle</th>
            </tr>
        </thead>
        <tbody>
            @foreach($xAlumnos as $item)
            <tr>
                <th scope="row">{{ $item->id}}</th>
                <td>{{ $item->codEst }}</td>
                <td> 
                    <a href="{{ route('Estudiante.xDetalle', $item->id) }}">
                        {{ $item->apeEst }}, {{ $item->nomEst }}
                    </a>
                </td>
                <td>
                    <form action="{{ route('Estudiante.xEliminar', $item->id) }}" method="pOST" class="d-inline">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-danger btn-sm">  X </button>
                    </form>
                    <a class="btn btn-warning btn-sm" href="{{ route('Estudiante.xActualizar', $item->id) }}">
                        A
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection