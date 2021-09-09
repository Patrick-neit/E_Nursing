<?php

namespace App\Http\Controllers;
use App\Models\Enfermera;
use App\Models\Persona;
use App\Models\User;

use Illuminate\Http\Request;

class EnfermeraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $enfermeras = Enfermera::all();
        return view('enfermera.index')->with('enfermeras',$enfermeras);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('enfermera.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $enfermera=new Enfermera();
        $enfermera->nombre=$request->get('nombre');
        $enfermera->apellido=$request->get('apellido');
        $enfermera->matricula=$request->input('matricula');

        $enfermera->save();

        return redirect()->route('enfermera.index');
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
        $persona=Persona::find($id);
        return view ('enfermera.edit') ->with('paciente', $persona);
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
        $enfermera=new Enfermera();
        $enfermera->nombre=$request->get('nombre');
        $enfermera->apellido=$request->get('apellido');
        $enfermera->matricula=$request->get('matricula');
        $enfermera->save();


        return redirect()->route('enfermera.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $enfermera=Persona::find($id);
        $enfermera->delete();
        return redirect()->route('enfermera.index');

    }
}
