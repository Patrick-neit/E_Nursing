@extends('layouts.plantillabase')
@section('contenido')
<h2>EDITAR RECETA</h2>

    <form action="{{ route('receta.edit', [ $receta -> id]) }}" method="POST">
        @csrf
        @method('put')

              <div class="mb-3">
                <label for="" class="form-label">Tipo Medicamento</label>
                <input id="tipomedi" name="tipomedi" type="text" class="form-control" value="{{$receta->tipomedi}}">
              </div>

              <div class="mb-3">
                <label for="" class="form-label">Instrucciones</label>
                <input id="instrucciones" name="instrucciones" type="text" class="form-control" value="{{$receta->instrucciones}}">
              </div>


                <div class="mb-3">
                    <label for="" class="form-label">Tipo Administracion</label>
                    <input id="tipoadmin" name="tipoadmin" type="text" class="form-control" value="{{$receta->tipomedi}}">
                </div>


            <a href="{{route('receta.index')}}" class="btn btn-danger"tabindex="8">Cancelar</a>
            <button type="submit" class="btn btn-primary"tabindex="7">Guardar</button>
    </form>
@endsection
