@extends('layouts.plantillabase') <!--Referencia a la carpeta layouts+plantilla para obtener sus estilos-->
@section('contenido') <!--Aqui hace referencia a yield('contenido') de la plantilla base -->
<h2>Crear  Enfermera</h2>

    <form action="{{route('enfermera.store')}}" method="POST">
        @csrf

              <div class="mb-3">
                <label for="" class="form-label">Nombre</label>
                <input id="nombre" name="nombre" type="text" class="form-control" tabindex="1">
              </div>

              <div class="mb-3">
                <label for="" class="form-label">Apellido</label>
                <input id="apellido" name="apellido" type="text" class="form-control" tabindex="2">
              </div>

              <
                <div class="mb-3">
                    <label for="" class="form-label">Matricula</label>
                    <input id="matricula" name="matricula" type="text" class="form-control" tabindex="4">
                </div>


            <a href="{{route('enfermera.index')}}" class="btn btn-danger"tabindex="8">Cancelar</a>
            <button type="submit" class="btn btn-primary"tabindex="7">Guardar</button>
    </form>

@endsection







