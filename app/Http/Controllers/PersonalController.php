<?php

namespace App\Http\Controllers;

use App\Models\Carrera;
use App\Models\Personal;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PersonalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //
        $request->user()->authorizeRoles(['admin']);
        $personal = Personal::all();
        return view('Administrador.Personal.Index',compact('personal'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        //
        $request->user()->authorizeRoles(['admin']);
        $carrera = Carrera::all();
        return view('Administrador.Personal.Agregar', compact('carrera'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->user()->authorizeRoles(['admin']);
        $request->validate([
            'rfc' => 'required',
            'curp' => 'required',
            'nombre'=>'required',
            'apellidos'=>'required',
            'f_nacimiento'=>'required',
            'telefono'=>'required',
            'correo'=>'required',
            'escolaridad'=>'required',
            'estudios'=>'required',
            'estatus'=>'required',
            'carrera'=>'required'
        ]);

        $personal = Personal::create([
            'RFC'=>$request->rfc,
            'Curp'=>$request->curp,
            'Nombre'=>$request->nombre,
            'Apellidos'=>$request->apellidos,
            'F_Nacimiento'=>$request->f_nacimiento,
            'Telefono'=>$request->telefono,
            'Correo'=>$request->correo,
            'Creditos'=>$request->creditos,
            'Escolaridad'=>$request->escolaridad,
            'Estudios'=>$request->estudios,
            'Status'=>$request->estatus,
            'Carrera'=>$request->carrera
        ]);

        return redirect('/Personal')->with('success','Personal creado exitosamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(Personal $personal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Personal $personal, Request $request)
    {
        //
        $request->user()->authorizeRoles(['admin']);
        $carrera = Carrera::all();
        return view('Administrador.Personal.Editar',compact('personal','carrera'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Personal $personal)
    {
        //
        $request->user()->authorizeRoles(['admin']);

        $request->validate([
            'rfc' => 'required',
            'curp' => 'required',
            'nombre'=>'required',
            'apellidos'=>'required',
            'f_nacimiento'=>'required',
            'telefono'=>'required',
            'correo'=>'required',
            'escolaridad'=>'required',
            'estudios'=>'required',
            'estatus'=>'required',
            'carrera'=>'required'
        ]);

        $personal-> update([
            'RFC'=>$request->rfc,
            'Curp'=>$request->curp,
            'Nombre'=>$request->nombre,
            'Apellidos'=>$request->apellidos,
            'F_Nacimiento'=>$request->f_nacimiento,
            'Telefono'=>$request->telefono,
            'Correo'=>$request->correo,
            'Creditos'=>$request->creditos,
            'Escolaridad'=>$request->escolaridad,
            'Estudios'=>$request->estudios,
            'Status'=>$request->estatus,
            'Carrera'=>$request->carrera
        ]);

        return redirect('/Personal')->with('success','Personal actualizado exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Personal $personal, Request $request)
    {
        //
        $request->user()->authorizeRoles(['admin']);
        $personal->delete();
        return redirect('/Personal')->with('success','Personal eliminado exitosamente');
       
    }
}
