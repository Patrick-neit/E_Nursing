@extends('layouts.plantillabase') <!--Referencia a la carpeta layouts+plantilla para obtener sus estilos-->
@section('contenido') <!--Aqui hace referencia a yield('contenido') de la plantilla base -->
<h2>Registrar Visita</h2>

    <form action="{{route('visita.store')}}" method="POST">
        @csrf

              <div class="mb-3">
                <label for="" class="form-label">Descripcion</label>
                <input id="descripcion" name="descripcion" type="text" class="form-control" tabindex="1">
              </div>

              <div class="mb-3">
                <label for="" class="form-label">Hora Entrada</label>
                <input id="hora_en" name="hora_en" type="text" class="form-control" tabindex="2">
              </div>

              <div class="mb-3">
                <label for="" class="form-label">Hora Salida</label>
                <input id="hora_sal" name="hora_sal" type="text" class="form-control" tabindex="3">
              </div>



            <a href="{{route('visita.index')}}" class="btn btn-danger"tabindex="8">Cancelar</a>
            <button type="submit" class="btn btn-primary"tabindex="7">Guardar</button>
    </form>

@endsection







