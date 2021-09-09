<?php

namespace App\Http\Controllers;
use App\Models\reserva;
use App\Models\Paciente;
use App\Models\horario;

use Illuminate\Http\Request;

class ReservaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reservas = reserva::all();
        return view('reserva.index')->with('reservas',$reservas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('reserva.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $reservas= new reserva();
        $reservas->motivo =$request->get('motivo');
        $reservas->hora =$request->get('hora');

        $reservas->save();

        return redirect()->route('reserva.index');

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
        $reserva  = reserva::find($id);
        return view ('reserva.edit') ->with('reserva', $reserva );
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
        $reserva= reserva::find($id);
        $reserva->motivo =$request->get('motivo');
        $reserva->hora =$request->get('hora');

        $reserva->save();

        return redirect()->route('reserva.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $reserva= reserva::find($id);
        $reserva->delete();
        return redirect()->route('reserva.index');
    }
}
