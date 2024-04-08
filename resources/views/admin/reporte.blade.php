<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reporte CFTPCV</title>
</head>
<body>
    <h4>Sede: {{$sede != null ? $sede : "No especifica."}}</h4>
    <h4>Componente: {{$componente != null ? $componente : "No especifica."}}</h4>
    <h4>tipoAct: {{$tipoAct != null ? $tipoAct : "No especifica."}}</h4>
    <h4>Desde: {{\Carbon\Carbon::parse($fechaInicio)->format('d-m-Y') }} hasta: {{\Carbon\Carbon::parse($fechaFinal)->format('d-m-Y') }}</h4>

    <h4>Cantidad de iniciativas: {{$cantidadIniciativas}}</h4>
    <h4>Cantidad de estudiantes: {{$cantidadEstudiantes}}</h4>
    <h4>Cantidad de docentes: {{$cantidadDocentes}}</h4>
</body>
</html>
