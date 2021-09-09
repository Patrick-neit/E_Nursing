
@extends('adminlte::page')
@extends('layouts.plantillabase') <!--Referencia a la carpeta layouts+plantilla-->
@section('title', 'Nueva Enfermera') <!--Referencio al text en el archivo config\adminlte.php-->

@section('css') <!--Referencia a los styles dentro de la carpeta layouts+plantillab-->

<link href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap5.min.css" rel="stylesheet">

@endsection

@section('contenido') <!--Aqui hace referencia a yield('contenido') de la plantilla base -->
<div class="card">
    <div class="card-body">






    <table class="table table-striped table-bordered shadow-lg mt-4" style="width:100%" id="usuarios">
            <thead class="bg primary text-black">
                <tr>

                    <th scope="col" >Nombre </th>
                    <th scope="col" >Apellido </th>
                    <th scope="col" >Matricula </th>
                    <th scope="col" >Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($enfermeras as $enfermera)
                <tr>

                    <td >{{$enfermera->nombre}}</td>
                    <td >{{$enfermera->apellido}}</td>
                    <td >{{$enfermera->matricula}}</td>
                    <td>
                        <form action="{{route('enfermera.destroy',$enfermera->id)}}" method="POST">
                        <a href={{ route('enfermera.edit', [$enfermera->id]) }}  class="btn btn-info">Editar </a>
                            @csrf
                            @method('Delete')

                        <button type="submit" class="btn btn-danger">Borrar</button>
                        </form>

                    </td>
                </tr>

                @endforeach
            </tbody>
        </table>
        <a href = "{{route('enfermera.create')}}" class= "btn btn-primary">Crear Enfermera</a>
        <a href = "{{route('kitmedico.index')}}" class= "btn btn-secondary">Agregar Kit_Medico</a>
    </div>
</div>



    @section('js')

    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"> </script>
 <script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap5.min.js"> </script>

    <script>
         $('#usuarios').DataTable();
    </script>
    @endsection
    @endsection






