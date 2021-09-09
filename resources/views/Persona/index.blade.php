@extends('adminlte::page')
@extends('layouts.plantillabase')
@section('title', 'Nuevo Usuario') <!--Referencio al text en el archivo config\adminlte.php-->

@section ('css')

<link  href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap5.min.css" rel="stylesheet">
@endsection


@section('contenido') <!--Aqui hace referencia a yield('contenido') de la plantilla base -->
<div class="card">
    <div class="card-body">





    <table class="table table-striped table-bordered shadow-lg mt-4" style="width:100%" id="usuarios">
            <thead class="bg primary text-black">
                <tr>
                    <th scope="col" >ID </th>
                    <th scope="col" >Nombre </th>
                    <th scope="col" >Apellido </th>
                    <th scope="col" >FechaNac </th>
                    <th scope="col" >Telefono </th>
                    <th scope="col" >Sexo </th>
                    <th scope="col" >EstadoCivil </th>
                    <th scope="col" >Direccion</th>
                    <th scope="col" >Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($personas as $persona)
                <tr>
                    <td >{{$persona->id}}</td>
                    <td >{{$persona->nombre}}</td>
                    <td >{{$persona->apellido}}</td>
                    <td >{{$persona->fecha_nac}}</td>
                    <td >{{$persona->telefono}}</td>
                    <td >{{$persona->sexo}}</td>
                    <td >{{$persona->estado_civil}}</td>
                    <td >{{$persona->direccion}}</td>
                    <td>
                        <form action="{{route('persona.destroy',$persona->id)}}" method="POST">
                        <a href={{ route('persona.edit', [$persona->id]) }}  class="btn btn-info">Editar </a>
                            @csrf
                            @method('Delete')

                        <button type="submit" class="btn btn-danger">Borrar</button>
                        </form>

                    </td>
                </tr>

                @endforeach
            </tbody>
        </table>
        <a href = "{{route('persona.create')}}" class= "btn btn-primary">Crear Usuario</a>
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






