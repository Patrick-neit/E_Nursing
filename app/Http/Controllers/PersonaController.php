<?php

namespace App\Http\Controllers;
use App\Models\Persona; //verificar que "APP" este en mayus siempre
use Illuminate\Http\Request;

class PersonaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $personas = Persona::all();
        return view('persona.index')->with('personas',$personas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('persona.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $personas= new Persona();
        $personas->nombre =$request->get('nombre');
        $personas->apellido =$request->get('apellido');
        $personas->fecha_nac =$request->get('fecha_nac');
        $personas->telefono =$request->get('telefono');
        $personas->sexo =$request->get('sexo');
        $personas->estado_civil =$request->get('estado_civil');
        $personas->direccion =$request->get('direccion');

        $personas->save();

        return redirect()->route('persona.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $persona = Persona::find($id);

        return view ('persona.edit') ->with('persona', $persona);
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
        $persona= persona::find($id);

        $persona->nombre =$request->get('nombre');
        $persona->apellido =$request->get('apellido');
        $persona->fecha_nac =$request->get('fecha_nac');
        $persona->telefono =$request->get('telefono');
        $persona->sexo =$request->get('sexo');
        $persona->estado_civil =$request->get('estado_civil');
        $persona->direccion =$request->get('direccion');

        $persona->save();

        return redirect()->route('persona.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $persona= persona::find($id);
        $persona->delete();
        return redirect()->route('persona.index');
    }
}
