<?php

namespace App\Http\Controllers;
use App\Models\servicio;

use Illuminate\Http\Request;

class ServicioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $servicios = servicio::all();
        return view('servicio.index')->with('servicios',$servicios);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('servicio.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $servicios= new servicio();
        $servicios->nombre =$request->get('nombre');
        $servicios->descripcion =$request->get('descripcion');
        $servicios->fecha_ini =$request->get('fecha_ini');
        $servicios->precio =$request->get('precio');
        $servicios->save();

        return redirect()->route('servicio.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view ('servicio.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $servicio  = servicio::find($id);
        return view ('servicio.edit') ->with('servicio', $servicio );
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
        $servicio= servicio::find($id);
        $servicio->nombre =$request->get('nombre');
        $servicio->descripcion =$request->get('descripcion');
        $servicio->fecha_ini =$request->get('fecha_ini');
        $servicio->precio =$request->get('precio');
        $servicio->save();

        return redirect()->route('servicio.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $servicio= servicio::find($id);
        $servicio->delete();
        return redirect()->route('servicio.index');
    }
}
