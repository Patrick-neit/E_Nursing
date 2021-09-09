@extends('layouts.plantillabase')
@section('contenido')
<h2>EDITAR PACIENTE</h2>

    <form action="{{ route('paciente.edit', [ $paciente -> id]) }}" method="POST">
        @csrf
        @method('put')

              <div class="mb-3">
                <label for="" class="form-label">Nombre</label>
                <input id="nombre" name="nombre" type="text" class="form-control" value="{{$paciente->nombre}}">
              </div>

              <div class="mb-3">
                <label for="" class="form-label">Apellido</label>
                <input id="apellido" name="apellido" type="text" class="form-control" value="{{$paciente->apellido}}">
              </div>

              <div class="mb-3">
                <label for="" class="form-label">Profesion</label>
                <input id="profesion" name="profesion" type="text" class="form-control" value="{{$paciente->profesion}}">
              </div>

                <div class="mb-3">
                    <label for="" class="form-label">Peso</label>
                    <input id="peso" name="peso" type="float" class="form-control" value="{{$paciente->peso}}">
                </div>


            <a href="{{route('paciente.index')}}" class="btn btn-danger"tabindex="8">Cancelar</a>
            <button type="submit" class="btn btn-primary"tabindex="7">Guardar</button>
    </form>
@endsection
