@extends('layouts.app')
@section('content')
    <div class="justify-content-center">
        <h1>Editar Materia <a href="{{route('materia')}}"><span class="badge bg-secondary">Regresar</span></a></h1>
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

    <form action="{{ route('materia.store') }}" method="post">
        @csrf
        @method('post')
        <div class="row mb-4">
            <div class="col form-outline">
                <label class="form-label" for="form6Example3">Clave Materia</label>
                <input type="text" name="claveMat" class="form-control" placeholder="xxxxxxxxx" required/>
            </div>
            <div class="col form-outline">
                <label class="form-label" for="form6Example3">Nivel Escolar</label>
                <select name="nivel_escolar" class="form-select" aria-label="Default select example" required>
                    <option selected>Selecciona la escolaridad</option>
                    <option value="Licenciatura">Licenciatura</option>
                    <option value="Postgrado">Postgrado</option>
                </select>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col form-outline">
                <label class="form-label" for="form6Example3">Nombre</label>
                <input type="text" name="nombre" class="form-control" placeholder="xxxxxxxxx" required/>
            </div>
            <div class="col form-outline">
                <label class="form-label" for="form6Example3">Tipo de Materia</label>
                <select name="tipo_materia" class="form-select" aria-label="Default select example" required>
                    <option selected>Selecciona el tipo</option>
                    <option value="Materia Curricular Base">Materia Curricular Base</option>
                    <option value="Materia Curricular Optativa">Materia Curricular Optativa</option>
                    <option value="Materia Curricular de Especialidad">Materia Curricular de Especialidad</option>
                    <option value="Materia Esxtra-Curricular">Materia Esxtra-Curricular</option>
                </select>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col form-outline">
                <label class="form-label" for="form6Example3">NombreAbreviado</label>
                <input type="text" name="nombreAbreviado" class="form-control" placeholder="xxxxxxxxx" required/>
            </div>
            <div class="col form-outline">
                <label class="form-label" for="form6Example3">Carreras</label>
                <select name="carrera" class="form-select" aria-label="Default select example" required>
                    <option selected>Selecciona la carrera</option>
                    @foreach ($carrera as $item)
                    <option value="{{$item->Nombre}}">{{$item->Nombre}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col form-outline">
                <label class="form-label" for="form6Example3">Departamento</label>
                <select name="departamento" class="form-select" aria-label="Default select example" required>
                    <option selected>Selecciona el departamento</option>
                    @foreach ($departamento as $item)
                    <option value="{{$item->Nombre}}">{{$item->Nombre}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="d-grid gap-2">
            <button type="submit" class="btn btn-primary">Agregar Materia</button>
        </div>
    </form>
    </div>
@endsection