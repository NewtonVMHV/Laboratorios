<?php

namespace App\Http\Controllers;

use App\Models\Carrera;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CarreraController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //
        $request->user()->authorizeRoles(['admin']);
        $carrera = Carrera::all();
        return view('Administrador.Carrera.Index', compact('carrera'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        //
        $request->user()->authorizeRoles(['admin']);
        return view('Administrador.Carrera.Agregar');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->user()->authorizeRoles(['admin']);
        $request->validate([
            'interna'=>'required',
            'clave_oficial'=>'required',
            'reticula'=>'required',
            'nivel_escolar'=>'required',
            'modalidad'=>'required',
            'reducido'=>'required',
            'siglas'=>'required',
            'creditos'=>'required',
            'maxima'=>'required',
            'minima'=>'required',
            'nombre'=>'required'
        ]);

        $carrera = Carrera::create([
            'Interna'=>$request->interna,
            'Clave_Oficial'=>$request->clave_oficial,
            'Reticula'=>$request->reticula,
            'Nivel_Escolar'=>$request->nivel_escolar,
            'Modalidad'=>$request->modalidad,
            'Reducido'=>$request->reducido,
            'Siglas'=>$request->siglas,
            'Creditos'=>$request->creditos,
            'Maxima'=>$request->maxima,
            'Minima'=>$request->minima,
            'Nombre'=>$request->nombre
        ]);
        return redirect('/Carrera')->with('success','Carrera creado exitosamente');
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
    public function edit(Carrera $carrera,Request $request)
    {
        //
        $request->user()->authorizeRoles(['admin']);
        return view('Administrador.Carrera.Editar', compact('carrera'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Carrera $carrera)
    {
        //
        $request->user()->authorizeRoles(['admin']);
        $request->validate([
            'interna'=>'required',
            'clave_oficial'=>'required',
            'reticula'=>'required',
            'nivel_escolar'=>'required',
            'modalidad'=>'required',
            'reducido'=>'required',
            'siglas'=>'required',
            'creditos'=>'required',
            'maxima'=>'required',
            'minima'=>'required',
            'nombre'=>'required',
        ]);

        $carrera-> update([
            'Interna'=>$request->interna,
            'Clave_Oficial'=>$request->clave_oficial,
            'Reticula'=>$request->reticula,
            'Nivel_Escolar'=>$request->nivel_escolar,
            'Modalidad'=>$request->modalidad,
            'Reducido'=>$request->reducido,
            'Siglas'=>$request->siglas,
            'Creditos'=>$request->creditos,
            'Maxima'=>$request->maxima,
            'Minima'=>$request->minima,
            'Nombre'=>$request->nombre,
        ]);
        return redirect('/Carrera')->with('success','Carrera actualizado exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Carrera $carrera, Request $request)
    {
        //
        $request->user()->authorizeRoles(['admin']);
        $carrera->delete();
        return redirect('/Carrera')->with('success','Carrera eliminado exitosamente');
    }
}
