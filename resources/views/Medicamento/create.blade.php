@extends('layouts.plantillabase') <!--Referencia a la carpeta layouts+plantilla para obtener sus estilos-->
@section('contenido') <!--Aqui hace referencia a yield('contenido') de la plantilla base -->
<h2>Crear  Medicamento</h2>

    <form action="{{route('medicamento.store')}}" method="POST">
        @csrf

              <div class="mb-3">
                <label for="" class="form-label">Nombre</label>
                <input id="nombre" name="nombre" type="text" class="form-control" tabindex="1">
              </div>

              <div class="mb-3">
                <label for="" class="form-label">Cantidad</label>
                <input id="cantidad" name="cantidad" type="text" class="form-control" tabindex="2">
              </div>

              <div class="mb-3">
                <label for="" class="form-label">Precio</label>
                <input id="precio" name="precio" type="float" class="form-control" tabindex="3">
              </div>



            <a href="{{route('medicamento.index')}}" class="btn btn-danger"tabindex="8">Cancelar</a>
            <button type="submit" class="btn btn-primary"tabindex="7">Guardar</button>
    </form>

@endsection
