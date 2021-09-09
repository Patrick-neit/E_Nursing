@extends('layouts.plantillabase')
@section('contenido')
<h2>EDITAR Enfermera</h2>

    <form action="{{ route('enfermera.edit', [ $enfermera -> id]) }}" method="POST">
        @csrf
        @method('put')

              <div class="mb-3">
                <label for="" class="form-label">Nombre</label>
                <input id="nombre" name="nombre" type="text" class="form-control" value="{{$enfermera->nombre}}">
              </div>

              <div class="mb-3">
                <label for="" class="form-label">Apellido</label>
                <input id="apellido" name="apellido" type="text" class="form-control" value="{{$enfermera->apellido}}">
              </div>


                <div class="mb-3">
                    <label for="" class="form-label">Matricula</label>
                    <input id="matricula" name="matricula" type="text" class="form-control" value="{{$enfermera->matricula}}">
                </div>


            <a href="{{route('enfermera.index')}}" class="btn btn-danger"tabindex="8">Cancelar</a>
            <button type="submit" class="btn btn-primary"tabindex="7">Guardar</button>
    </form>
@endsection
