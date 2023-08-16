@extends('layouts.app')
@section('content')
    <div class="justify-content-center">
        <h1>Agregar Personal <a href="{{route('personal')}}"><span class="badge bg-secondary">Regresar</span></a></h1>
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

    <form action="{{ route('personal.store') }}" method="post">
        @csrf
        @method('post')
        <div class="row mb-4">
            <div class="col form-outline">
                <label class="form-label" for="form6Example3">RFC</label>
                <input type="text" name="rfc" class="form-control" maxlength="13" placeholder="xxxxxxxxx" required/>
            </div>
            <div class="col form-outline">
                <label class="form-label" for="form6Example3">Curp</label>
                <input type="text" name="curp" class="form-control" maxlength="18" placeholder="xxxxxxxxxxxxxxxxxx" required/>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col form-outline">
                <label class="form-label" for="form6Example1">Nombre</label>
                <input type="text" name="nombre" class="form-control" placeholder="xxxxx" required/>
            </div>
            <div class="col form-outline">
                <label class="form-label" for="form6Example2">Apellidos</label>
                <input type="text" name="apellidos" class="form-control" placeholder="xxxxx" required/>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col form-outline">
                <label class="form-label" for="form6Example3">Fecha de Nacimiento</label>
                <input type="date"  name="f_nacimiento" class="form-control" placeholder="xxxx-xx-xx" required/>
            </div>
            <div class="col form-outline">
                <label class="form-label" for="form6Example3">Telefono</label>
                <input type="text" name="telefono" class="form-control" maxlength="10" placeholder="xxxxxxxxxx" required/>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col form-outline">
                <label class="form-label" for="form6Example3">Correo</label>
                <input type="email" name="correo" class="form-control" placeholder="xxxx@xxxx.xxx" required/>
            </div>
            <div class="col form-outline">
                <label class="form-label" for="form6Example3">Escolaridad</label>
                <select name="escolaridad" class="form-select" aria-label="Default select example" required>
                    <option selected>Selecciona la escolaridad</option>
                    <option value="Primaria">Primaria</option>
                    <option value="Secundaria">Secundaria</option>
                    <option value="Preparatoria">Preparatoria</option>
                    <option value="Licenciatura">Licenciatura</option>
                    <option value="Maestria">Maestria</option>
                    <option value="Postgrado">Postgrado</option>
                    <option value="Doctorado">Doctorado</option>
                </select>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col form-outline">
                <label class="form-label" for="form6Example3">Estudios</label>
                <input type="text" name="estudios" class="form-control" placeholder="xxxxxxxxxx" required/>
            </div>
            <div class="col form-outline">
                <label class="form-label" for="form6Example3">Status</label>
                <select name="estatus" class="form-select" aria-label="Default select example" required>
                    <option selected>Selecciona el status</option>
                    <option value="1">Activo</option>
                    <option value="0">Inactivo</option>
                </select>
            </div>
        </div>
        <div class="row mb-4">
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
        <div class="d-grid gap-2">
            <button type="submit" class="btn btn-primary">Agregar Personal</button>
        </div>
    </form>
    </div>
@endsection