<?php

namespace App\Http\Controllers;
use App\Models\Enfermera;
use App\Models\horario;

use Illuminate\Http\Request;

class HorarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($enfermera_id)
    {
        $horarios=Horario::with('enfermera')->where('enfermera_id','=',$enfermera_id)->get();
        return view('horario.index',['horarios'=>$horarios]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($enfermera_id)
    {
        return view('horario.create',['enfermera_id'=>$enfermera_id]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $enfermera_id)
    {
        $horario=new Horario();
        $horario->hora_inicio=$request->get('hora_inicio');
        $horario->hora_fin=$request->get('hora_fin');
        $horario->enfermera_id=$enfermera_id;
        $horario->save();

        return redirect()->route('horario.index',['enfermera_id'=>$enfermera_id]);
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
        $horario=Horario::find($id);
        return view('horario.edit')-> with('horarios',$horario);
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
        $horario=Horario::find($id);
        $horario->hora_inicio=$request->input('hora_inicio');
        $horario->hora_fin=$request->input('hora_fin');
        $horario->save();
        return redirect()->route('horario.index',['enfermera_id'=>$horario->enfermera_id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $horario=Horario::find($id);
        $horario->delete();
        return redirect()->route('horario.index');
    }
}
