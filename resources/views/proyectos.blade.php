@extends('layouts.app')

@section('content')
    <table class="table table-striped table-hover">
        <thead>
            <tr>
              <th scope="col">Nombre del Proyecto</th>
              <th scope="col">Fuente Fondos</th>
              <th scope="col">Monto Planificado</th>
              <th scope="col">Monto Patrocinados</th>
              <th scope="col">Monto Fondos Propios</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($proyectos as $proyecto)                        
            <tr>
              <td>{{$proyecto->nombre_proyecto}}</td>
              <td>{{$proyecto->fuente_fondos}}</td>
              <td>{{$proyecto->monto_planificado}}</td>
              <td>{{$proyecto->monto_patrocinado}}</td>
              <td>{{$proyecto->monto_fondos_propios}}</td>
              <td><a href="{{route('proyectos.edit', $proyecto)}}" class="btn btn-link" >Editar</a>/ <form action="{{route('proyectos.delete', $proyecto)}}" method="post">@csrf @method('DELETE')<button type="submit" class="btn btn-link" style="color: red">Eliminar</button></form></td>
            </tr>
            @endforeach
          </tbody>
    </table>
@endsection