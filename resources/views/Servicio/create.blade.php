@extends('layouts.plantillabase') <!--Referencia a la carpeta layouts+plantilla para obtener sus estilos-->
@section('contenido') <!--Aqui hace referencia a yield('contenido') de la plantilla base -->
<h2>Crear Servicio</h2>

    <form action="{{route('servicio.store')}}" method="POST">
        @csrf

              <div class="mb-3">
                <label for="" class="form-label">Nombre</label>
                <input id="nombre" name="nombre" type="text" class="form-control" tabindex="1">
              </div>

              <div class="mb-3">
                <label for="" class="form-label">Descripcion</label>
                <input id="descripcion" name="descripcion" type="text" class="form-control" tabindex="2">
              </div>

              <div class="mb-3">
                <label for="" class="form-label">Fecha Inicio</label>
                <input id="fecha_ini" name="fecha_ini" type="date" class="form-control" tabindex="3">
              </div>

                <div class="mb-3">
                    <label for="" class="form-label">Precio</label>
                    <input id="precio" name="precio" type="float" class="form-control" tabindex="4">
                </div>


            <a href="{{route('servicio.index')}}" class="btn btn-danger"tabindex="8">Cancelar</a>
            <button type="submit" class="btn btn-primary"tabindex="7">Guardar</button>
    </form>

@endsection






