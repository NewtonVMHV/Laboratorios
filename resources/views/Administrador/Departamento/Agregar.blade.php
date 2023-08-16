@extends('layouts.app')
@section('content')
    <div class="justify-content-center">
        <h1>Editar Carrera <a href="{{route('departamento')}}"><span class="badge bg-secondary">Regresar</span></a></h1>
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

    <form action="{{ route('departamento.store') }}" method="post">
        @csrf
        @method('post')
        <div class="row mb-4">
            <div class="col from-outline">
                <label class="form-label" for="form6Example3">Clave Depende</label>
                <input type="text" name="claveDep" class="form-control" placeholder="xxxxxxxxx" required/>
            </div>
            <div class="col form-outline">
                <label class="form-label" for="form6Example3">Departamento Depende</label>
                <input type="text" name="depDepende" class="form-control" placeholder="xxxxxxxxxxxxxxxxxx" required/>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col form-outline">
                <label class="form-label" for="form6Example3">Nombre</label>
                <input type="text" name="nombre" class="form-control" placeholder="xxxxxxxxx" required/>
            </div>
            <div class="col form-outline">
                <label class="form-label" for="form6Example3">Nivel</label>
                <input type="text" name="nivel" class="form-control" placeholder="xxxxxxxxxxxxxxxxxx" required/>
            </div>
        </div>
        <div class="row mb-4">
            <div class=" col form-outline">
                <label class="form-label" for="form6Example3">Tipo</label>
                <input type="text" name="tipo" class="form-control" maxlength="13" placeholder="xxxxxxxxx" required/>
            </div>
        </div>
        <div class="d-grid gap-2">
            <button type="submit" class="btn btn-primary">Agregar Departamento</button>
        </div>
    </form>
    </div>
@endsection