<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
  <div>
    <h3>Gobierno de El Salvador</h3>
  </div>
  <h4>Comisión Ejecutiva Hidroeléctrica del Río Lempa</h4>
  <h4>{{$date->format('Y-m-d')}}</h4>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
              <th scope="col">ID</th>
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
              <td>{{$proyecto->id}}</td>
              <td>{{$proyecto->nombre_proyecto}}</td>
              <td>{{$proyecto->fuente_fondos}}</td>
              <td>{{$proyecto->monto_planificado}}</td>
              <td>{{$proyecto->monto_patrocinado}}</td>
              <td>{{$proyecto->monto_fondos_propios}}</td>
            </tr>
            @endforeach
          </tbody>
    </table>
</body>
</html>