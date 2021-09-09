@extends('adminlte::page')
@extends('layouts.plantillabase') <!--Referencia a la carpeta layouts+plantilla-->
@section('title', 'Nuevo Paciente') <!--Referencio al text en el archivo config\adminlte.php-->
@section('css') <!--Referencia a los styles dentro de la carpeta layouts+plantillab-->

<link href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap5.min.css" rel="stylesheet">

@endsection

@section('contenido') <!--Aqui hace referencia a yield('contenido') de la plantilla base -->
<div class="card">
    <div class="card-body">


    <a href = "{{route('horario.create')}}" class= "btn btn-primary">Asignar Horario</a>


    <table id="personas" class="table table-striped table-bordered shadow-lg mt-4" style="width:100%">
            <thead class="bg primary text-black">
                <tr>

                    <th scope="col" >Hora Inicio </th>
                    <th scope="col" >Hora Fin </th>
                    <th scope="col" >Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($horarios as $horario)
                <tr>

                    <td >{{$horario->hora_inicio}}</td>
                    <td >{{$horario->hora_fin}}</td>
                    <td>
                        <form action="{{route('horario.destroy',$horario->id)}}" method="POST">
                        <a href={{ route('horario.edit', [$horario->id]) }}  class="btn btn-info">Editar </a>
                            @csrf
                            @method('Delete')

                        <button type="submit" class="btn btn-danger">Borrar</button>
                        </form>

                    </td>
                </tr>

                @endforeach
            </tbody>
        </table>
    </div>
</div>


    @section('js')
    <script> src="https://code.jquery.com/jquery-3.5.1.js"</script>
    <script>src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"</script>
    <script>src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap5.min.js"</script>

    <script>
        $(document).ready(function() {
    $('#personas').DataTable();
    } );
    </script>

    @endsection
    @endsection






