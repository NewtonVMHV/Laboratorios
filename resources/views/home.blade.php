@extends('layouts.app')

@section('content')
<div class="container">
    @if(Auth::user()->hasRole('admin'))
        <h2>Bienvenido  {{Auth::user()->name }}</h2>
        <hr>
        <div class="card-group">
            <div class="card">
            <img src="{{URL::asset('images/alumnos.jpeg')}}" class="card-img-top" alt="..." width="250" height="250">
                <div class="card-body">
                    <h5 class="card-title">Modulo para Alumnos</h5>
                    <p class="card-text">El módulo permite la administración de los alumnos, para llavar a cacbo el registro del servicio y ofrecer la información acerca del estado que tiene el alumno.</p>
                    <a href="{{ route('alumno') }}" class="btn btn-outline-info">Alumno</a>
                </div>
            </div>
            <div class="card">
            <img src="{{URL::asset('images/personal.jpeg')}}" class="card-img-top" alt="..." width="250" height="250">
                <div class="card-body">
                    <h5 class="card-title">Modulo para Personal</h5>
                    <p class="card-text">El módulo permite la administración sobre el personal de la institución, para llevar a cabo los registros y ofrecer la información acerca del estado que tiene el personal.</p>
                    <a href="{{route('personal')}}" class="btn btn-outline-info">Personal</a>
                </div>
            </div>
            <div class="card">
            <img src="{{URL::asset('images/carreras.jpeg')}}" class="card-img-top" alt="..." width="250" height="250">
                <div class="card-body">
                    <h5 class="card-title">Modulo para Carrera</h5>
                    <p class="card-text">El módulo permite la administración sobre las carreras que tiene la institución, para llevar a cabo la optimización de los registros y ofrecer la información de dichas carreras. </p>
                    <a href="{{route('carrera')}}" class="btn btn-outline-info">Carrera</a>
                </div>
            </div>
        </div>
        <div class="card-group">
            <div class="card">
            <img src="{{URL::asset('images/materias.jpeg')}}" class="card-img-top" alt="..." width="250" height="250">
                    <div class="card-body">
                    <h5 class="card-title">Modulo para Materia</h5>
                    <p class="card-text">El módulo permite la administración sobre las materias que tiene la institución, para llevar a cabo la optimización de los registros y ofrecer la información de dichas materias. </p>
                    <a href="{{route('materia')}}" class="btn btn-outline-info">Materia</a>
                </div>
            </div>
            <div class="card">
            <img src="{{URL::asset('images/departamentos.jpeg')}}" class="card-img-top" alt="..." width="250" height="250">
                <div class="card-body">
                    <h5 class="card-title">Modulo para Departamento</h5>
                    <p class="card-text">El módulo permite la administración sobre los departamentos que tiene su institución, para llevar a cabo la optimización de los registros y ofrecer la información de dichos departamentos. </p>
                    <a href="{{route('departamento')}}" class="btn btn-outline-info">Departamento</a>
                </div>
            </div>
        </div>
    @else
    <h2>Bienvenido {{ Auth::user()->name }}</h2>
    <hr>
        <div class="card-group">
            <div class="card">
            <img src="{{URL::asset('images/registro_alumnos.jpeg')}}" class="card-img-top" alt="..." width="250" height="300">
                <div class="card-body">
                    <h5 class="card-title">Modulo para el Registro de alumnos</h5>
                    <p class="card-text">El módulo permite llevar un control para los laboratorios en definición de cuantos alumnos ingresan cada día, para llevar a cabo la optimización de los registros en la rama estudiantil.</p>
                    <a href="{{route('registro_alumno')}}" class="btn btn-outline-info">Registro de alumno</a>
                </div>
            </div>
            <div class="card">
            <img src="{{URL::asset('images/personal.jpeg')}}" class="card-img-top" alt="..." width="250" height="300">
                <div class="card-body">
                    <h5 class="card-title">Modulo para el Registro de docentes</h5>
                    <p class="card-text">El módulo permite llevar un control para los laboratorios en definición de los docentes a ocupar dichas aulas, para llevar a cabo la optimización de los registros en la rama estudiantil.</p>
                <a href="{{route('registro_docente')}}" class="btn btn-outline-info">Registro de docentes</a>
                </div>
            </div>
            <div class="card">
                <img src="{{ URL::asset('images/externos.jpeg') }}" alt=""  class="card-img-top" alt="..." width="250" height="300">
                <div class="card-body">
                    <h5 class="card-title">Modulo para el Registro de Externos</h5>
                    <p class="card-text">El módulo permite llevar un control para los laboratorios en definición de los personas de manera externa hacia nuestra institución a ocupar dichas aulas, para llevar a cabo la optimización de los registros en la rama estudiantil.</p>
                    <a href="{{route('externo')}}" class="btn btn-outline-info">Registro de externos</a>
                </div>
            </div>
        </div>
    @endif
</div>
@endsection

