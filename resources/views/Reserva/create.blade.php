@extends('layouts.plantillabase') <!--Referencia a la carpeta layouts+plantilla para obtener sus estilos-->
@section('contenido') <!--Aqui hace referencia a yield('contenido') de la plantilla base -->
<h2>Crear Reserva</h2>

    <form action="{{route('reserva.store')}}" method="POST">
        @csrf

              <div class="mb-3">
                <label for="" class="form-label">Motivo</label>
                <input id="motivo" name="motivo" type="text" class="form-control" tabindex="1">
              </div>

              <div class="mb-3">
                <label for="" class="form-label">Hora</label>
                <input id="hora" name="hora" type="text" class="form-control" tabindex="2">
              </div>

              <div class="mb-3">

            <a href="{{route('reserva.index')}}" class="btn btn-danger"tabindex="8">Cancelar</a>
            <button type="submit" class="btn btn-primary"tabindex="7">Guardar</button>
    </form>

@endsection







