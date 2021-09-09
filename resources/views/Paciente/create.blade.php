@extends('layouts.plantillabase') <!--Referencia a la carpeta layouts+plantilla para obtener sus estilos-->
@section('contenido') <!--Aqui hace referencia a yield('contenido') de la plantilla base -->
<h2>Crear  Paciente</h2>

    <form action="{{route('paciente.store')}}" method="POST">
        @csrf

              <div class="mb-3">
                <label for="" class="form-label">Nombre</label>
                <input id="nombre" name="nombre" type="text" class="form-control" tabindex="1">
              </div>

              <div class="mb-3">
                <label for="" class="form-label">Apellido</label>
                <input id="apellido" name="apellido" type="text" class="form-control" tabindex="2">
              </div>

              <div class="mb-3">
                <label for="" class="form-label">Profesion</label>
                <input id="profesion" name="profesion" type="text" class="form-control" tabindex="3">
              </div>

                <div class="mb-3">
                    <label for="" class="form-label">Peso</label>
                    <input id="peso" name="peso" type="float" class="form-control" tabindex="4">
                </div>


            <a href="{{route('paciente.index')}}" class="btn btn-danger"tabindex="8">Cancelar</a>
            <button type="submit" class="btn btn-primary"tabindex="7">Guardar</button>
    </form>

@endsection







