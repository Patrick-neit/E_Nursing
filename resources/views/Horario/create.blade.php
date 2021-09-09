@extends('layouts.plantillabase') <!--Referencia a la carpeta layouts+plantilla para obtener sus estilos-->
@section('contenido') <!--Aqui hace referencia a yield('contenido') de la plantilla base -->
<h2>Crear Nuevo Horario</h2>

    <form action="{{route(['horario.store', $enfermera_id])}}" method="POST">
        @csrf

              <div class="mb-3">
                <label for="" class="form-label">Hora Inicio</label>
                <input id="hora_inicio" name="hora_inicio" type="text" class="form-control" tabindex="1">
              </div>

              <div class="mb-3">
                <label for="" class="form-label">Hora Fin</label>
                <input id="apellido" name="apellido" type="text" class="form-control" tabindex="2">
              </div>


            <a href="{{route('horario.index')}}" class="btn btn-danger"tabindex="8">Cancelar</a>
            <button type="submit" class="btn btn-primary"tabindex="7">Guardar</button>
    </form>

@endsection







