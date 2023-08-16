@extends('layouts.app')
@section('content')
    <div class="justify-content-center">
        <h1>Editar Carrera <a href="{{route('carrera')}}"><span class="badge bg-secondary">Regresar</span></a></h1>
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

    <form action="{{ route('carrera.store') }}" method="post">
        @csrf
        @method('post')
        <div class="row mb-4">
            <div class="col form-outline">
                <label class="form-label" for="form6Example3">Interna</label>
                <input type="number" name="interna" class="form-control" placeholder="xxxxxxxxx" required/>
            </div>
            <div class="col form-outline">
                <label class="form-label" for="form6Example3">Clave Oficial</label>
                <input type="text" name="clave_oficial" class="form-control" placeholder="xxxxxxxxx" required/>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col form-outline">
                <label class="form-label" for="form6Example3">Reticula</label>
                <input type="text" name="reticula" class="form-control" placeholder="xxxxxxxxx" required/>
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
                <label class="form-label" for="form6Example3">Modalidad</label>
                <select name="modalidad" class="form-select" aria-label="Default select example" required>
                    <option selected>Selecciona la modalidad</option>
                    <option value="Modalidad Mixta">Modalidad Mixta</option>
                    <option value="Modalidad Escolarizada">Modalidad Escolarizada</option>
                </select>
            </div>
            <div class="col form-outline">
                <label class="form-label" for="form6Example3">Reducido</label>
                <input type="text" name="reducido" class="form-control" placeholder="xxxxxxxxx" required/>
            </div>
        </div>

        <div class="row mb-4">
            <div class="col form-outline">
                <label class="form-label" for="form6Example3">Siglas</label>
                <input type="text" name="siglas" class="form-control" placeholder="xxxxxxxxx" required/>
            </div>
            <div class="col form-outline">
                <label class="form-label" for="form6Example3">Creditos</label>
                <input type="number" name="creditos" class="form-control" placeholder="xxxxxxxxx" required/>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col">
                <div class="form-outline">
                    <label class="form-label" for="form6Example3">Maxima</label>
                    <input type="number" name="maxima" class="form-control" placeholder="xxxxxxxxx" required/>
                </div>
            </div>
            <div class="col">
                <div class="form-outline">
                    <label class="form-label" for="form6Example3">Minima</label>
                    <input type="number" name="minima" class="form-control" placeholder="xxxxxxxxx" required/>
                </div>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col">
                <div class="form-outline">
                    <label class="form-label" for="form6Example3">Nombre</label>
                    <input type="text" name="nombre" class="form-control" placeholder="xxxxxxxxx" required/>
                </div>
            </div>
        </div>
        <div class="d-grid gap-2">
            <button type="submit" class="btn btn-primary">Agregar Carrera</button>
        </div>
    </form>
    </div>
@endsection