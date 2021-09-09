@extends('layouts.plantillabase')
@section('contenido')
<h2>Editar Reserva</h2>

    <form action="{{ route('reserva.edit', [ $reserva -> id]) }}" method="POST">
        @csrf
        @method('put')

              <div class="mb-3">
                <label for="" class="form-label">Motivo</label>
                <input id="motivo" name="motivo" type="text" class="form-control" value="{{$reserva->motivo}}">
              </div>

              <div class="mb-3">
                <label for="" class="form-label">Hora</label>
                <input id="hora" name="hora" type="text" class="form-control" value="{{$reserva->hora}}">
              </div>





            <a href="{{route('reserva.index')}}" class="btn btn-danger"tabindex="8">Cancelar</a>
            <button type="submit" class="btn btn-primary"tabindex="7">Guardar</button>
    </form>
@endsection
