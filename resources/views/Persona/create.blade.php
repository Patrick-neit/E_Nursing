@extends('layouts.plantillabase') <!--Referencia a la carpeta layouts+plantilla para obtener sus estilos-->
@section('contenido') <!--Aqui hace referencia a yield('contenido') de la plantilla base -->
<h2>Crear Usuario</h2>

    <form action="{{route('persona.store')}}" method="POST">
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
                <label for="" class="form-label">Fecha_nac</label>
                <input id="fecha_nac" name="fecha_nac" type="date" class="form-control" tabindex="3">
              </div>

                <div class="mb-3">
                    <label for="" class="form-label">Telefono</label>
                    <input id="telefono" name="telefono" type="text" class="form-control" tabindex="4">
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Sexo</label>
                    <input id="sexo" name="sexo" type="text" class="form-control" tabindex="5">
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Estado_civil</label>
                    <input id="estado_civil" name="estado_civil" type="text" class="form-control" tabindex="6">
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Direccion</label>
                    <input id="direccion" name="direccion" type="text" class="form-control" >
                </div>

            <a href="{{route('persona.index')}}" class="btn btn-danger"tabindex="8">Cancelar</a>
            <button type="submit" class="btn btn-primary"tabindex="7">Guardar</button>
    </form>

@endsection






