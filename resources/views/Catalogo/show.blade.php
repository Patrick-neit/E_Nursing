@extends('layouts.plantillabase') <!--Referencia a la carpeta layouts+plantilla para obtener sus estilos-->
@section('contenido') <!--Aqui hace referencia a yield('contenido') de la plantilla base -->
<h2>Servicios</h2>

<ul>
        <li><h2>Nombre: </h2><h3>{{ $servicio ->nombre}}</h3></li>
        <li><h2>Descripcion: </h2><h3>{{ $servicio ->descripcion }}</h3></li>
        <li><h2>Fecha Inicio: </h2><h3>{{ $servicio ->fecha_ini }}</h3></li>
        <li><h2>Precio: </h2><h3>{{ $servicio ->precio }}</h3></li>
</ul>


            <a href="{{route('catalogo.index')}}" class="btn btn-danger"tabindex="8">Volver</a>
            <button type="submit" class="btn btn-primary"tabindex="7">Guardar</button>
    </form>

@endsection
