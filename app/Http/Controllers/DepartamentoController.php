<?php

namespace App\Http\Controllers;

use App\Models\Departamento;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DepartamentoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //
        $request->user()->authorizeRoles(['admin']);
        $departamento = Departamento::all();
        return view('Administrador.Departamento.Index', compact('departamento'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        //
        $request->user()->authorizeRoles(['admin']);
        return view('Administrador.Departamento.Agregar');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->user()->authorizeRoles(['admin']);
        $request->validate([
            'claveDep'=>'required',
            'depDepende'=>'required',
            'nombre'=>'required',
            'nivel'=>'required',
            'tipo'=>'required'
        ]);

        $departamento = Departamento::create([
            'ClaveDep'=>$request->claveDep,
            'DepDepende'=>$request->depDepende,
            'Nombre'=>$request->nombre,
            'Nivel'=>$request->nivel,
            'Tipo'=>$request->tipo,
        ]);

        return redirect('/Departamento')->with('success','Departamento Guardado correctamente');
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
    public function edit(Departamento $departamento, Request $request)
    {
        //
        $request->user()->authorizeRoles(['admin']);
        return view('Administrador.Departamento.Editar', compact('departamento'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Departamento $departamento)
    {
        //
        $request->user()->authorizeRoles(['admin']);
        $request->validate([
            'claveDep'=>'required',
            'depDepende'=>'required',
            'nombre'=>'required',
            'nivel'=>'required',
            'tipo'=>'required',
        ]);

        $departamento->update([
            'ClaveDep'=>$request->claveDep,
            'DepDepende'=>$request->depDepende,
            'Nombre'=>$request->nombre,
            'Nivel'=>$request->nivel,
            'Tipo'=>$request->tipo,
        ]);

        return redirect('/Departamento')->with('success','Departamento actualizado exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Departamento $departamento, Request $request)
    {
        //
        $request->user()->authorizeRoles(['admin']);
        $departamento->delete();
        return redirect('/Departamento')->with('Success','Departamento eliminado exitosamente');
    }
}
