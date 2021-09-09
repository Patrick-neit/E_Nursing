@extends('layouts.plantillabase')
@section('contenido')
<h2>EDITAR MEDICAMENTO</h2>

    <form action="{{ route('medicamento.edit', [ $receta -> id]) }}" method="POST">
        @csrf
        @method('put')

              <div class="mb-3">
                <label for="" class="form-label">Nombre</label>
                <input id="nombre" name="nombre" type="text" class="form-control" value="{{$medicamento->nombre}}">
              </div>

              <div class="mb-3">
                <label for="" class="form-label">Cantidad</label>
                <input id="cantidad" name="cantidad" type="text" class="form-control" value="{{$medicamento->cantidad}}">
              </div>

              <div class="mb-3">
                <label for="" class="form-label">Precio</label>
                <input id="precio" name="precio" type="float" class="form-control" value="{{$medicamento->precio}}">
              </div>




            <a href="{{route('medicamento.index')}}" class="btn btn-danger"tabindex="8">Cancelar</a>
            <button type="submit" class="btn btn-primary"tabindex="7">Guardar</button>
    </form>
@endsection
