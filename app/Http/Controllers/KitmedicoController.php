<?php

namespace App\Http\Controllers;
use App\Models\kitmedico;
use App\Models\Enfermera;

use Illuminate\Http\Request;

class KitmedicoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kitmedicos = kitmedico::all();
        return view('kitmedico.index')->with('kitmedicos',$kitmedicos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('kitmedico.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $kitmedicos= new kitmedico();
        $kitmedicos->tipo_kit =$request->get('tipo_kit');
        $kitmedicos->instrumentos =$request->get('instrumentos');



        $kitmedicos->save();

        return redirect()->route('kitmedico.index');
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
        $kitmedico = kitmedico::find($id);

        return view ('kitmedico.edit') ->with('kitmedico', $kitmedico);
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
        $kitmedico= kitmedico::find($id);

        $kitmedico->tipo_kit =$request->get('tipo_kit');
        $kitmedico->instrumentos =$request->get('instrumentos');
        $kitmedico->save();

        return redirect()->route('kitmedico.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kitmedico= kitmedico::find($id);
        $kitmedico->delete();
        return redirect()->route('kitmedico.index');
    }
}
