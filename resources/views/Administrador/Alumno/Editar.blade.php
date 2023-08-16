@extends('layouts.app')
@section('content')
    <div class="justify-content-center">
        <h1>Editar Alumno <a href="{{route('alumno')}}"><span class="badge bg-secondary">Regresar</span></a></h1>
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

        <form action="{{ route('alumno.update',$alumno) }}" method="post">
            @csrf
            @method('put')
            <div class="row mb-4">
                <div class="col form-outline">
                    <label class="form-label" for="form6Example3">Matricula</label>
                    <input type="text" name="matricula" class="form-control" maxlength="9" placeholder="xxxxxxxxx" value="{{ $alumno->Matricula }}" required/>
                </div>
                <div class="col form-outline">
                    <label class="form-label" for="form6Example3">Curp</label>
                    <input type="text" name="curp" class="form-control" maxlength="18" placeholder="xxxxxxxxxxxxxxxxxx" value="{{ $alumno->Curp }}" required/>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col form-outline">
                    <label class="form-label" for="form6Example1">Nombre</label>
                    <input type="text" name="nombre" class="form-control" placeholder="xxxxx" value="{{ $alumno->Nombre }}" required/>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col form-outline">
                    <label class="form-label" for="form6Example2">Apellido Paterno</label>
                    <input type="text" name="a_paterno" class="form-control" placeholder="xxxxx" value="{{ $alumno->A_Paterno }}" required/>
                </div>
                <div class="col form-outline">
                    <label class="form-label" for="form6Example2">Apellido Materno</label>
                    <input type="text" name="a_materno" class="form-control" placeholder="xxxxxx" value="{{ $alumno->A_Materno }}" required/>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col form-outline">
                    <label class="form-label" for="form6Example3">Fecha de Nacimiento</label>
                    <input type="date"  name="f_nacimiento" class="form-control" placeholder="xxxx-xx-xx" value="{{ $alumno->F_Nacimiento }}" required/>
                </div>
                <div class="col form-outline">
                    <label class="form-label" for="form6Example3">Telefono</label>
                    <input type="text" name="telefono" class="form-control" maxlength="10" placeholder="xxxxxxxxxx" value="{{ $alumno->Telefono }}" required/>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col form-outline">
                    <label class="form-label" for="form6Example3">Correo</label>
                    <input type="email" name="correo" class="form-control" placeholder="xxxx@xxxx.xxx" value="{{ $alumno->Correo }}" required/>
                </div>
                <div class="col form-outline">
                    <label class="form-label" for="form6Example3">Status</label>
                    <select name="estatus" class="form-select" aria-label="Default select example" required>
                        <option selected>
                            @if ($alumno->Estatus == '1')
                            Activo
                            @else
                                @if ($alumno->Estatus == '0')
                                Inactivo
                                @endif
                            @endif
                        </option>
                        <option value="1">Activo</option>
                        <option value="0">Inactivo</option>
                    </select>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col form-outline">
                    <label class="form-label" for="form6Example3">Carreras</label>
                    <select name="carrera" class="form-select" aria-label="Default select example" required>
                        <option selected>{{ $alumno->Carrera }}</option>
                        @foreach ($carrera as $item)
                        <option value="{{$item->Nombre}}">{{$item->Nombre}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="d-grid gap-2">
                <button type="submit" class="btn btn-primary">Editar Alumno</button>
            </div>
        </form>
    </div>
@endsection