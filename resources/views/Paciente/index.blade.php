
@extends('adminlte::page')
@extends('layouts.plantillabase') <!--Referencia a la carpeta layouts+plantilla-->
@section('title', 'Nuevo Paciente') <!--Referencio al text en el archivo config\adminlte.php-->
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
                    <th scope="col" >Apellido </th>
                    <th scope="col" >Profesion </th>
                    <th scope="col" >Peso </th>
                    <th scope="col" >Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pacientes as $paciente)
                <tr>

                    <td >{{$paciente->nombre}}</td>
                    <td >{{$paciente->apellido}}</td>
                    <td >{{$paciente->profesion}}</td>
                    <td >{{$paciente->peso}}</td>
                    <td>
                        <form action="{{route('paciente.destroy',$paciente->id)}}" method="POST">
                        <a href={{ route('paciente.edit', [$paciente->id]) }}  class="btn btn-info">Editar </a>
                            @csrf
                            @method('Delete')

                        <button type="submit" class="btn btn-danger">Borrar</button>
                        </form>

                    </td>
                </tr>

                @endforeach
            </tbody>
        </table>
        <a href = "{{route('paciente.create')}}" class= "btn btn-primary">Crear Paciente</a>
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






