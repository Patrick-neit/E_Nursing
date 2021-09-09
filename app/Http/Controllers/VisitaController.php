<?php

namespace App\Http\Controllers;
use App\Models\visita;
use Illuminate\Http\Request;

class VisitaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $visitas = visita::all();
        return view('visita.index')->with('visitas',$visitas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('visita.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $visitas= new visita();
        $visitas->descripcion =$request->get('descripcion');
        $visitas->hora_en =$request->get('hora_en');
        $visitas->hora_sal =$request->get('hora_sal');
        $visitas->save();

        return redirect()->route('visita.index');

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
        $visita  = visita::find($id);
        return view ('visita.edit') ->with('visita', $visita );
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
        $visita= visita::find($id);
        $visita->descripcion =$request->get('descripcion');
        $visita->hora_en =$request->get('hora_en');
        $visita->hora_sal =$request->get('hora_sal');
        $visita->save();

        return redirect()->route('visita.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $visita= visita::find($id);
        $visita->delete();
        return redirect()->route('visita.index');
    }
}
