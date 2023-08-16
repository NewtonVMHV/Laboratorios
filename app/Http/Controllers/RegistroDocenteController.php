<?php

namespace App\Http\Controllers;

use App\Models\Carrera;
use App\Models\Materia;
use App\Models\Registro_Docente;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use PDF;

class RegistroDocenteController extends Controller
{
       /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //
        $request->user()->authorizeRoles(['user']);
        $registro_docente = Registro_Docente::all();
        return view('Registros.Docente.Index', compact('registro_docente'));
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
        return view('Registros.Docente.Agregar', compact('carrera','materia'));
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
            'numAlumnos'=>'required',
            'actividad'=>'required',
            'carrera'=>'required',
            'materia'=>'required',
            'observaciones'=>'required'
        ]);

        $registro_docente = Registro_Docente::create([
            'Nombre'=>$request->nombre,
            'Fecha'=>$request->fecha,
            'numAlumnos'=>$request->numAlumnos,
            'Actividad'=>$request->actividad,
            'Carrera'=>$request->carrera,
            'Materia'=>$request->materia,
            'Observaciones'=>$request->observaciones
        ]);
        return redirect('/Registro-Docente')->with('success','Registro creado exitosamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(Registro_Docente $registro_docente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Registro_Docente $registro_docente, Request $request)
    {
        //
        $request->user()->authorizeRoles(['user']);
        $carrera = Carrera::all();
        $materia = Materia::all();
        return view('Registros.Docente.Editar',compact('registro_docente', 'carrera','materia'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Registro_Docente $registro_docente)
    {
        //
        $request->user()->authorizeRoles(['user']);
        $request->validate([
            'nombre'=>'required',
            'fecha'=>'required',
            'numAlumnos'=>'required',
            'actividad'=>'required',
            'carrera'=>'required',
            'materia'=>'required',
            'observaciones'=>'required'
        ]); 

        $registro_docente->update([
            'Nombre'=>$request->nombre,
            'Fecha'=>$request->fecha,
            'numAlumnos'=>$request->numAlumnos,
            'Actividad'=>$request->actividad,
            'Carrera'=>$request->carrera,
            'Materia'=>$request->materia,
            'Observaciones'=>$request->observaciones,
        ]);

        return redirect('/Registro-Docente')->with('success','Registro actualizado exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Registro_Docente $registro_docente, Request $request)
    {
        //
        $request->user()->authorizeRoles(['user']);
        $registro_docente->delete();
        return redirect('/Registro-Docente')->with('success','Registro eliminado exitosamente');
    }

    public function eliminarTabla(Request $request){
        $request->user()->authorizeRoles(['user']);
        $registro_docente = Registro_Docente::query()->delete();
        return redirect('/Registro-Docente')->with('success','Tabla limpia de manera exitosamente');
    }

    public function export(Request $request){
        $request->user()->authorizeRoles(['user']);
        $registro_docente = Registro_Docente::all();
        $pdf = PDF::loadView('Registros.Docente.exportar',compact('registro_docente'))->setPaper('a4', 'landscape');
        return $pdf->download('Docentes.pdf');
    }
}
