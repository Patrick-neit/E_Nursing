<?php

namespace App\Http\Controllers;

use App\Models\Paciente;
use App\Models\User;


use Illuminate\Http\Request;

class PacienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pacientes = Paciente::all();
        return view('paciente.index')->with('pacientes',$pacientes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('paciente.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pacientes= new Paciente();
        $pacientes->nombre =$request->get('nombre');
        $pacientes->apellido =$request->get('apellido');
        $pacientes->profesion =$request->get('profesion');
        $pacientes->peso =$request->get('peso');
        $pacientes->save();

        return redirect()->route('paciente.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $paciente = Paciente::find($id);
        return view ('paciente.edit') ->with('paciente', $paciente);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $paciente= Paciente::find($id);

        $paciente->nombre =$request->get('nombre');
        $paciente->apellido =$request->get('apellido');
        $paciente->fecha_nac =$request->get('profesion');
        $paciente->telefono =$request->get('peso');
        $paciente->save();

        return redirect()->route('paciente.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $paciente= Paciente::find($id);
        $paciente->delete();
        return redirect()->route('paciente.index');
    }
}
