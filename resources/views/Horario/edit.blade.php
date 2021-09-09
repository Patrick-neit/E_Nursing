@extends('layouts.plantillabase')
@section('contenido')
<h2>EDITAR PACIENTE</h2>

    <form action="{{ route(['horario.edit', $horario]) }}" method="POST">
        @csrf
        @method('put')

              <div class="mb-3">
                <label for="" class="form-label">Hora Inicio</label>
                <input id="hora_inicio" name="hora_inicio" type="text" class="form-control" value="{{$horario->hora_inicio}}">
              </div>

              <div class="mb-3">
                <label for="" class="form-label">Hor Fin</label>
                <input id="hora_fin" name="hora_fin" type="text" class="form-control" value="{{$horario->hora_fin}}">
              </div>


            <a href="{{route('horario.index')}}" class="btn btn-danger"tabindex="8">Cancelar</a>
            <button type="submit" class="btn btn-primary"tabindex="7">Guardar</button>
    </form>
@endsection
