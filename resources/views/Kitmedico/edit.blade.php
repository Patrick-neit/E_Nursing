@extends('layouts.plantillabase')
@section('contenido')
<h2>EDITAR KIT MEDICO</h2>

    <form action="{{ route('kitmedico.edit', [ $kitmedico -> id]) }}" method="POST">
        @csrf
        @method('put')

              <div class="mb-3">
                <label for="" class="form-label">Tipo Kit Medico</label>
                <input id="tipo_kit" name="tipo_kit" type="text" class="form-control" value="{{$kitmedico->tipo_kit}}">
              </div>

              <div class="mb-3">
                <label for="" class="form-label"> Instrumentos</label>
                <input id="instrucciones" name="instrucciones" type="text" class="form-control" value="{{$kitmedico->instrucciones}}">
              </div>


              <a href="{{route('kitmedico.index')}}" class="btn btn-danger"tabindex="8">Cancelar</a>
            <button type="submit" class="btn btn-primary"tabindex="7">Guardar</button>
    </form>
@endsection
