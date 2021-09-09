<?php

namespace App\Http\Controllers;
use App\Models\receta;

use Illuminate\Http\Request;

class RecetaController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $recetas = receta::all();
        return view('receta.index')->with('recetas',$recetas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('receta.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $receta=new receta();
        $receta->tipomedi=$request->get('tipomedi');
        $receta->instrucciones=$request->get('instrucciones');
        $receta->tipoadmin=$request->input('tipoadmin');

        $receta->save();

        return redirect()->route('receta.index');
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
        $receta=receta::find($id);
        return view ('receta.edit') ->with('receta', $receta);
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
        $receta=new receta();
        $receta->tipomedi=$request->get('tipomedi');
        $receta->instrucciones=$request->get('instrucciones');
        $receta->tipoadmin=$request->get('tipoadmin');
        $receta->save();


        return redirect()->route('receta.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $receta=receta::find($id);
        $receta->delete();
        return redirect()->route('receta.index');

    }
}
