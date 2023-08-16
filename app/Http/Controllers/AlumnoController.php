<?php

namespace App\Http\Controllers;

use App\Models\Carrera;
use App\Models\Alumno;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AlumnoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //
        $request->user()->authorizeRoles(['admin']);
        $alumno = Alumno::all();
        return view('Administrador.Alumno.Index', compact('alumno'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        //
        $request->user()->authorizeRoles(['admin']);
        $carrera = Carrera::all();
        return view('Administrador.Alumno.Agregar', compact('carrera'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->user()->authorizeRoles(['admin']);
        $request->validate([
            'matricula' => 'required',
            'curp' => 'required',
            'nombre'=>'required',
            'a_paterno'=>'required',
            'a_materno'=>'required',
            'f_nacimiento'=>'required',
            'telefono'=>'required',
            'correo'=>'required',
            'estatus'=>'required',
            'carrera'=>'required'
        ]);

        $alumno = Alumno::create([
            'Matricula'=>$request->matricula,
            'Curp'=>$request->curp,
            'Nombre'=>$request->nombre,
            'A_Paterno'=>$request->a_paterno,
            'A_Materno'=>$request->a_materno,
            'F_Nacimiento'=>$request->f_nacimiento,
            'Telefono'=>$request->telefono,
            'Creditos'=>$request->creditos,
            'Correo'=>$request->correo,
            'Estatus'=>$request->estatus,
            'Carrera'=>$request->carrera
        ]);

        return redirect('/alumno')->with('success','Alumno creado exitosamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(Alumno $alumno)
    {
        //

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Alumno $alumno, Request $request)
    {
        //
        $request->user()->authorizeRoles(['admin']);
        $carrera = Carrera::all();
        return view('Administrador.Alumno.Editar',compact('alumno','carrera'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Alumno $alumno)
    {
        //
        $request->user()->authorizeRoles(['admin']);
        $request->validate([
            'matricula' => 'required',
            'curp' => 'required',
            'nombre'=>'required',
            'a_paterno'=>'required',
            'a_materno'=>'required',
            'f_nacimiento'=>'required',
            'telefono'=>'required',
            'correo'=>'required',
            'estatus'=>'required',
            'carrera'=>'required',
        ]);
        
        $alumno->update([
            'Matricula'=>$request->matricula,
            'Curp'=>$request->curp,
            'Nombre'=>$request->nombre,
            'A_Paterno'=>$request->a_paterno,
            'A_Materno'=>$request->a_materno,
            'F_Nacimiento'=>$request->f_nacimiento,
            'Telefono'=>$request->telefono,
            'Creditos'=>$request->creditos,
            'Correo'=>$request->correo,
            'Estatus'=>$request->estatus,
            'Carrera'=>$request->carrera,
        ]);

        return redirect('/alumno')->with('success','Alumno actualizado exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Alumno $alumno, Request $request)
    {
        //
        $request->user()->authorizeRoles(['admin']);
        $alumno->delete();
        return redirect('/alumno')->with('success','Alumno eliminado exitosamente');
    }
}
