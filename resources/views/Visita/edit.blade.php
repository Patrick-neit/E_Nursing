@extends('layouts.plantillabase')
@section('contenido')
<h2>Editar Visita</h2>

    <form action="{{ route('visita.edit', [ $visita -> id]) }}" method="POST">
        @csrf
        @method('put')

              <div class="mb-3">
                <label for="" class="form-label">Descripcion</label>
                <input id="descripcion" name="descripcion" type="text" class="form-control" value="{{$visita->descripcion}}">
              </div>

              <div class="mb-3">
                <label for="" class="form-label">Hora Entrada</label>
                <input id="hora_en" name="hora_en" type="datetime" class="form-control" value="{{$visita->hora_en}}">
              </div>

              <div class="mb-3">
                <label for="" class="form-label">Hora Salida</label>
                <input id="hora_sal" name="hora_sal" type="datetime" class="form-control" value="{{$visita->hora_sal}}">
              </div>



            <a href="{{route('visita.index')}}" class="btn btn-danger"tabindex="8">Cancelar</a>
            <button type="submit" class="btn btn-primary"tabindex="7">Guardar</button>
    </form>
@endsection
