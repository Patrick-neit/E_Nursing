@extends('layouts.plantillabase') <!--Referencia a la carpeta layouts+plantilla para obtener sus estilos-->
@section('contenido') <!--Aqui hace referencia a yield('contenido') de la plantilla base -->
<h2>Crear KitMedico</h2>

    <form action="{{route('kitmedico.store')}}" method="POST">
        @csrf

              <div class="mb-3">
                <label for="" class="form-label">Tipo KIT</label>
                <input id="tipo_kit" name="tipo_kit" type="text" class="form-control" tabindex="1">
              </div>

              <div class="mb-3">
                <label for="" class="form-label">Instrumentos</label>
                <input id="instrumentos" name="instrumentos" type="text" class="form-control" tabindex="2">
              </div>



            <a href="{{route('kitmedico.index')}}" class="btn btn-danger"tabindex="8">Cancelar</a>
            <button type="submit" class="btn btn-primary"tabindex="7">Guardar</button>
    </form>

@endsection







