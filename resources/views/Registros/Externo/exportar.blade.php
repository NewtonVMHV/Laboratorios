<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registro de Externo</title>
</head>
<body>
    <h1>Registros de Externo</h1>
    <table class="table table-bordered">
        <thead>
          <tr>
            <th scope="col">Nombre</th>
            <th scope="col">Fecha</th>
            <th scope="col">Número de alumnos</th>
            <th scope="col">Actividad</th>
            <th scope="col">Carrera</th>
            <th scope="col">Observaciones</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($externo as $item)
             <tr>
                 <td>{{$item->Nombre}}</td>
                 <td>{{$item->Fecha}}</td>
                 <td>{{$item->numAlumnos}}</td>
                 <td>{{$item->Actividad}}</td>
                 <td>{{$item->Carrera}}</td>
                 <td>{{$item->Observaciones}}</td>
             </tr>
            @endforeach
           </tbody>
      </table>
</body>
</html>