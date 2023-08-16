<?php

namespace App\Http\Controllers;

use App\Models\Carrera;
use App\Models\Departamento;
use App\Models\Materia;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MateriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //
        $request->user()->authorizeRoles(['admin']);
        $materia = Materia::all();
        return view('Administrador.Materia.Index', compact('materia'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        //
        $request->user()->authorizeRoles(['admin']);
        $carrera = Carrera::all();
        $departamento = Departamento::all();
        return view('Administrador.Materia.Agregar', compact('carrera','departamento'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->user()->authorizeRoles(['admin']);
        $request->validate([
            'claveMat'=>'required',
            'nivel_escolar'=>'required',
            'nombre'=>'required',
            'tipo_materia'=>'required',
            'nombreAbreviado'=>'required',
            'carrera'=>'required',
            'departamento'=>'required'
        ]);

        $materia = Materia::create([
            'ClaveMat'=>$request->claveMat,
            'Nivel_Escolar'=>$request->nivel_escolar,
            'Nombre'=>$request->nombre,
            'TipoMateria'=>$request->tipo_materia,
            'NombreAbreviado'=>$request->nombreAbreviado,
            'Carrera'=>$request->carrera,
            'Departamento'=>$request->departamento
        ]);

        return redirect('/Materia')->with('success','Materia actualizado exitosamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Materia $materia, Request $request)
    {
        //
        $request->user()->authorizeRoles(['admin']);
        $carrera = Carrera::all();
        $departamento = Departamento::all();
        return view('Administrador.Materia.Editar',compact('materia','carrera','departamento'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Materia $materia)
    {
        //
        $request->user()->authorizeRoles(['admin']);
        $request->validate([
            'claveMat'=>'required',
            'nivel_escolar'=>'required',
            'nombre'=>'required',
            'tipo_materia'=>'required',
            'nombreAbreviado'=>'required',
            'carrera'=>'required',
            'departamento'=>'required'
        ]);

        $materia->update([
            'ClaveMat'=>$request->claveMat,
            'Nivel_Escolar'=>$request->nivel_escolar,
            'Nombre'=>$request->nombre,
            'TipoMateria'=>$request->tipo_materia,
            'NombreAbreviado'=>$request->nombreAbreviado,
            'Carrera'=>$request->carrera,
            'Departamento'=>$request->departamento
        ]);

        return redirect('/Materia')->with('success','Materia actualizado exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Materia $materia, Request $request)
    {
        //
        $request->user()->authorizeRoles(['admin']);
        $materia->delete();
        return redirect('/Materia')->with('success','Materia eliminado exitosamente');
    }
}
