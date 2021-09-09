@extends('layouts.plantillabase')
@section('contenido')
<h2>EDITAR SERVICIO</h2>

    <form action="{{ route('persona.edit', [ $servicio -> id]) }}" method="POST">
        @csrf
        @method('put')

              <div class="mb-3">
                <label for="" class="form-label">Nombre</label>
                <input id="nombre" name="nombre" type="text" class="form-control" value="{{$servicio->nombre}}">
              </div>

              <div class="mb-3">
                <label for="" class="form-label">Descripcion</label>
                <input id="descripcion" name="descripcion" type="text" class="form-control" value="{{$servicio->descripcion}}">
              </div>

              <div class="mb-3">
                <label for="" class="form-label">Fecha_ini</label>
                <input id="fecha_ini" name="fecha_ini" type="date" class="form-control" value="{{$servicio->fecha_nac}}">
              </div>

                <div class="mb-3">
                    <label for="" class="form-label">Precio</label>
                    <input id="precio" name="precio" type="float" class="form-control" value="{{$servicio->precio}}">
                </div>

            <a href="{{route('servicio.index')}}" class="btn btn-danger"tabindex="8">Cancelar</a>
            <button type="submit" class="btn btn-primary"tabindex="7">Guardar</button>
    </form>
@endsection
