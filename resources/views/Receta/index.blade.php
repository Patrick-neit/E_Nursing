@extends('adminlte::page')
@extends('layouts.plantillabase') <!--Referencia a la carpeta layouts+plantilla-->
@section('title', 'Nueva Enfermera') <!--Referencio al text en el archivo config\adminlte.php-->
@section('css') <!--Referencia a los styles dentro de la carpeta layouts+plantillab-->

<link href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap5.min.css" rel="stylesheet">

@endsection

@section('contenido') <!--Aqui hace referencia a yield('contenido') de la plantilla base -->
<div class="card">
    <div class="card-body">






    <table id="personas" class="table table-striped table-bordered shadow-lg mt-4" style="width:100%">
            <thead class="bg primary text-black">
                <tr>

                    <th scope="col" >Tipo Medicamento </th>
                    <th scope="col" >Instrucciones</th>
                    <th scope="col" >Tipo Administracion </th>
                    <th scope="col" >Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($recetas as $receta)
                <tr>

                    <td >{{$receta->tipomedi}}</td>
                    <td >{{$receta->instrucciones}}</td>
                    <td >{{$receta->tipoadmin}}</td>
                    <td>
                        <form action="{{route('receta.destroy',$receta->id)}}" method="POST">
                        <a href={{ route('receta.edit', [$receta->id]) }}  class="btn btn-info">Editar </a>
                            @csrf
                            @method('Delete')

                        <button type="submit" class="btn btn-danger">Borrar</button>
                        </form>

                    </td>
                </tr>

                @endforeach
            </tbody>
        </table>
        <a href = "{{route('receta.create')}}" class= "btn btn-primary">Crear Receta</a>
        <a href = "{{route('medicamento.create')}}" class= "btn btn-succes">Ver Medicamentos</a>
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






