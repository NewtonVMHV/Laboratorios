@extends('layouts.app')
@section('content')
    <div class="justify-content-center">
        <h1>Editar Registro <a href="{{route('registro_docente')}}"><span class="badge bg-secondary">Regresar</span></a></h1>
        @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('registro_docente.update',$registro_docente) }}" method="post">
            @csrf
            @method('put')
            <div class="row mb-4">
                <div class="col">
                    <div class="form-outline">
                        <label class="form-label" for="form6Example3">Nombre</label>
                        <input type="text" name="nombre" class="form-control" placeholder="xxxxxxxxx" value="{{ $registro_docente->Nombre }}" required/>
                    </div>
                </div>
                <div class="col">
                    <div class="form-outline mb-4">
                        <label class="form-label" for="form6Example3">Fecha</label>
                        <input type="date" name="fecha" class="form-control" placeholder="xxxxxxxxx" value="{{ $registro_docente->Fecha }}" required/>
                    </div>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col">
                    <div class="form-outline mb-4">
                        <label class="form-label" for="form6Example3">Numero de Alumnos</label>
                        <input type="number" name="numAlumnos" class="form-control" placeholder="xxxxxxxxxxxxxxxxxx" value="{{ $registro_docente->numAlumnos}}" required/>
                    </div>
                </div>
                <div class="col">
                    <div class="form-outline mb-4">
                        <label class="form-label" for="form6Example3">Actividad</label>
                        <select name="actividad" class="form-select" aria-label="Default select example" required>
                            <option selected>{{ $registro_docente->Actividad }}</option>
                            <option value="Tarea">Tarea</option>
                            <option value="Investigación">Investigación</option>
                            <option value="Consultar">Consultar</option>
                            <option value="VideoConferencia">VideoConferencia</option>
                            <option value="Examen">Examen</option>
                            <option value="Clase">Clase</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col">
                    <div class="form-outline">
                        <label class="form-label" for="form6Example3">Carreras</label>
                        <select name="carrera" class="form-select" aria-label="Default select example" required>
                            <option selected>{{ $registro_docente->Carrera }}</option>
                            @foreach ($carrera as $item)
                            <option value="{{$item->Nombre}}">{{$item->Nombre}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col">
                    <div class="form-outline">
                        <label class="form-label" for="exampleDataList">Materia</label>
                        <input class="form-control" list="datalistOptions" id="exampleDataList" name="materia" placeholder="Type to search..." value="{{ $registro_docente->Materia }}">
                        <datalist id="datalistOptions">
                            @foreach ($materia as $item)
                                <option value="{{ $item->Nombre }}">
                            @endforeach
                        </datalist>
                    </div>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col">
                    <div class="form-outline">
                        <label class="form-label" for="form6Example3">Observaciones</label>
                        <textarea class="form-control" name="observaciones" id="form6Example7" rows="4" required>{{ $registro_docente->Observaciones }}</textarea>
                    </div>
                </div>
            </div>
            <div class="d-grid gap-2">
                <button type="submit" class="btn btn-primary">Editar Registro</button>
            </div>
        </form>
    </div>
@endsection