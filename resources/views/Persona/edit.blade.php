@extends('layouts.plantillabase')
@section('contenido')
<h2>EDITAR REGISTRO</h2>

    <form action="{{ route('persona.edit', [ $persona -> id]) }}" method="POST">
        @csrf
        @method('put')

              <div class="mb-3">
                <label for="" class="form-label">Nombre</label>
                <input id="nombre" name="nombre" type="text" class="form-control" value="{{$persona->nombre}}">
              </div>

              <div class="mb-3">
                <label for="" class="form-label">Apellido</label>
                <input id="apellido" name="apellido" type="text" class="form-control" value="{{$persona->apellido}}">
              </div>

              <div class="mb-3">
                <label for="" class="form-label">Fecha_nac</label>
                <input id="fecha_nac" name="fecha_nac" type="date" class="form-control" value="{{$persona->fecha_nac}}">
              </div>

                <div class="mb-3">
                    <label for="" class="form-label">Telefono</label>
                    <input id="telefono" name="telefono" type="text" class="form-control" value="{{$persona->telefono}}">
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Sexo</label>
                    <input id="sexo" name="sexo" type="text" class="form-control" value="{{$persona->sexo}}">
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Estado_civil</label>
                    <input id="estado_civil" name="estado_civil" type="text" class="form-control" value="{{$persona->estado_civil}}">
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Direccion</label>
                    <input id="direccion" name="direccion" type="text" class="form-control" value="{{$persona->direccion}}">
                </div>

            <a href="{{route('persona.index')}}" class="btn btn-danger"tabindex="8">Cancelar</a>
            <button type="submit" class="btn btn-primary"tabindex="7">Guardar</button>
    </form>
@endsection
