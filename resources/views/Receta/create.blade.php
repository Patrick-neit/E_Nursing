@extends('layouts.plantillabase') <!--Referencia a la carpeta layouts+plantilla para obtener sus estilos-->
@section('contenido') <!--Aqui hace referencia a yield('contenido') de la plantilla base -->
<h2>Asignar Receta</h2>

    <form action="{{route('receta.store')}}" method="POST">
        @csrf

              <div class="mb-3">
                <label for="" class="form-label">Tipo Medicamento</label>
                <input id="tipomedi" name="tipomedi" type="text" class="form-control" tabindex="1">
              </div>

              <div class="mb-3">
                <label for="" class="form-label">Instrucciones</label>
                <input id="instrucciones" name="instrucciones" type="text" class="form-control" tabindex="2">
              </div>
              <div class="mb-3">
                <label for="" class="form-label">Tipo Administracion</label>
                <input id="tipoadmin" name="tipoadmin" type="text" class="form-control" tabindex="3">
              </div>



            <a href="{{route('receta.index')}}" class="btn btn-danger"tabindex="8">Cancelar</a>
            <button type="submit" class="btn btn-primary"tabindex="7">Guardar</button>
    </form>

@endsection







