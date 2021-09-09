<?php

namespace App\Http\Controllers;
use App\Models\medicamento;
use App\Models\receta;

use Illuminate\Http\Request;

class MedicamentoController extends Controller
{
    public function index()
    {
        $medicamentos = medicamento::all();
        return view('medicamento.index')->with('medicamentos',$medicamentos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('medicamento.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $medicamentos= new medicamento();
        $medicamentos->nombre =$request->get('nombre');
        $medicamentos->cantidad =$request->get('cantidad');
        $medicamentos->precio =$request->get('precio');

        $medicamentos->save();

        return redirect()->route('medicamento.index');

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
        $medicamento = medicamento::find($id);
        return view ('medicamento.edit') ->with('medicamento', $medicamento);
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
        $medicamento= medicamento::find($id);

        $medicamento->nombre =$request->get('nombre');
        $medicamento->cantidad =$request->get('cantidad');
        $medicamento->precio =$request->get('precio');
        $medicamento->save();

        return redirect()->route('medicamento.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $medicamento= medicamento::find($id);
        $medicamento->delete();
        return redirect()->route('medicamento.index');
    }
}
