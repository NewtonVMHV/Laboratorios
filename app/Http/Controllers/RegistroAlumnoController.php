<?php

namespace App\Http\Controllers;

use App\Models\Carrera;
use App\Models\Materia;
use App\Models\Registro_Alumno;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use PDF;

class RegistroAlumnoController extends Controller
{
    
     /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //
        $request->user()->authorizeRoles(['user']);
        $registro_alumno = Registro_Alumno::all();
        return view('Registros.Alumno.Index', compact('registro_alumno'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        //
        $request->user()->authorizeRoles(['user']);
        $carrera = Carrera::all();
        $materia = Materia::all();
        return view('Registros.Alumno.Agregar', compact('carrera','materia'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->user()->authorizeRoles(['user']);
        $request->validate([
            'nombre'=>'required',
            'fecha'=>'required',
            'actividad'=>'required',
            'carrera'=>'required',
            'materia'=>'required'
        ]);

        $registro_alumno = Registro_Alumno::create([
            'Nombre'=>$request->nombre,
            'Fecha'=>$request->fecha,
            'Actividad'=>$request->actividad,
            'Carrera'=>$request->carrera,
            'Materia'=>$request->materia,
            'Observaciones'=>$request->observaciones
        ]);

        return redirect('/Registro-Alumno')->with('success','Registro creado exitosamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(Registro_Alumno $registro_alumno)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Registro_Alumno $registro_alumno, Request $request)
    {
        //
        $request->user()->authorizeRoles(['user']);
        $carrera = Carrera::all();
        $materia = Materia::all();
        return view('Registros.Alumno.Editar', compact('registro_alumno','carrera','materia'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Registro_Alumno $registro_alumno)
    {
        //
        $request->user()->authorizeRoles(['user']);
        $request->validate([
            'nombre'=>'required',
            'fecha'=>'required',
            'actividad'=>'required',
            'carrera'=>'required',
            'materia'=>'required',
            'observaciones'=>'required',
        ]);

        $registro_alumno->update([
            'Nombre'=>$request->nombre,
            'Fecha'=>$request->fecha,
            'Actividad'=>$request->actividad,
            'Carrera'=>$request->carrera,
            'Materia'=>$request->materia,
            'Observaciones'=>$request->observaciones,
        ]);

        return redirect('/Registro-Alumno')->with('success','Registro actualizado exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Registro_Alumno $registro_alumno, Request $request)
    {
        //
        $request->user()->authorizeRoles(['user']);
        $registro_alumno->delete();
        return redirect('/Registro-Alumno')->with('success','Registro eliminado exitosamente');
       
    }

    public function eliminarTabla(Request $request){
        $request->user()->authorizeRoles(['user']);
        $registro_alumno = Registro_Alumno::query()->delete();
        return redirect('/Registro-Docente')->with('success','Tabla limpia de manera exitosamente');
    }

    public function export(Request $request){
        $request->user()->authorizeRoles(['user']);
        $registro_alumno = Registro_Alumno::all();
        $pdf = PDF::loadView('Registros.Alumno.exportar',compact('registro_alumno'))->setPaper('a4', 'landscape');
        return $pdf->download('Alumnos.pdf');
    }
}
