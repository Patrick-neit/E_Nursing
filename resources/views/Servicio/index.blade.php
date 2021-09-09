
@extends('adminlte::page')
@extends('layouts.plantillabase') <!--Referencia a la carpeta layouts+plantilla-->
@section('title', 'Tratamientos') <!--Referencio al text en el archivo config\adminlte.php-->
@section('css') <!--Referencia a los styles dentro de la carpeta layouts+plantillab-->

<link href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap5.min.css" rel="stylesheet">

@endsection

@section('contenido') <!--Aqui hace referencia a yield('contenido') de la plantilla base -->
<div class="card">
    <div class="card-body">






    <table id="personas" class="table table-striped table-bordered shadow-lg mt-4" style="width:100%">
            <thead class="bg primary text-black">
                <tr>

                    <th scope="col" >Nombre </th>
                    <th scope="col" >Descripcion </th>
                    <th scope="col" >Fecha Inicio </th>
                    <th scope="col" >Precio </th>
                    <th scope="col" >Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($servicios as $servicio)
                <tr>

                    <td >{{$servicio->nombre}}</td>
                    <td >{{$servicio->descripcion}}</td>
                    <td >{{$servicio->fecha_ini}}</td>
                    <td >{{$servicio->precio}}</td>
                    <td>
                        <form action="{{route('servicio.destroy',$servicio->id)}}" method="POST">
                        <a href={{ route('servicio.edit', [$servicio->id]) }}  class="btn btn-info">Editar </a>
                            @csrf
                            @method('Delete')

                        <button type="submit" class="btn btn-danger">Borrar</button>
                        </form>

                    </td>
                </tr>

                @endforeach
            </tbody>
        </table>
        <a href = "{{route('servicio.create')}}" class= "btn btn-primary">Crear Servicio</a>
        <a href = "{{route('receta.index')}}" class= "btn btn-secondary">Ver Receta</a>
    </div>
</div>




    @section('js')
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"> </script>
    <script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap5.min.js"> </script>

    <script>

    $('#personas').DataTable();

    </script>

    @endsection
    @endsection
