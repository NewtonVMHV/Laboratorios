<?php

namespace App\Http\Controllers;

use App\Models\Carrera;
use App\Models\Externo;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use PDF;

class ExternoController extends Controller
{
    //
    public function index(Request $request){
        $request->user()->authorizeRoles(['user']);
        $externo = Externo::all();
        return view('Registros.Externo.Index', compact('externo'));
    }

     /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        //
        $request->user()->authorizeRoles(['user']);
        $carrera = Carrera::all();
        return view('Registros.Externo.Agregar', compact('carrera'));
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
            'observaciones'=>'required'
        ]);

        $externo = Externo::create([
            'Nombre'=>$request->nombre,
            'Fecha'=>$request->fecha,
            'numAlumnos'=>$request->numAlumnos,
            'Actividad'=>$request->actividad,
            'Carrera'=>$request->carrera,
            'Observaciones'=>$request->observaciones
        ]);
        return redirect('/Registro-Externo')->with('success','Registro creado exitosamente');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Externo $externo, Request $request)
    {
        //
        $request->user()->authorizeRoles(['user']);
        $carrera = Carrera::all();
        return view('Registros.Externo.Editar',compact('externo', 'carrera'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Externo $externo)
    {
        //
        $request->user()->authorizeRoles(['user']);
        $request->validate([
            'nombre'=>'required',
            'fecha'=>'required',
            'numAlumnos'=>'required',
            'actividad'=>'required',
            'carrera'=>'required',
            'observaciones'=>'required'
        ]); 

        $externo->update([
            'Nombre'=>$request->nombre,
            'Fecha'=>$request->fecha,
            'numAlumnos'=>$request->numAlumnos,
            'Actividad'=>$request->actividad,
            'Carrera'=>$request->carrera,
            'Observaciones'=>$request->observaciones,
        ]);

        return redirect('/Registro-Externo')->with('success','Registro actualizado exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Externo $externo, Request $request)
    {
        //
        $request->user()->authorizeRoles(['user']);
        $externo->delete();
        return redirect('/Registro-Externo')->with('success','Registro eliminado exitosamente');
    }

    public function eliminarTabla(Request $request){
        $request->user()->authorizeRoles(['user']);
        $externo = Externo::query()->delete();
        return redirect('/Registro-Externo')->with('success','Tabla limpia de manera exitosamente');
    }

    public function export(Request $request){
        $request->user()->authorizeRoles(['user']);
        $externo = Externo::all();
        $pdf = PDF::loadView('Registros.Externo.exportar',compact('externo'))->setPaper('a4', 'landscape');
        return $pdf->download('Externos.pdf');
    }
}
