<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reporte de actividades CFTAysén</title>
    <style>
        html {
        min-height: 100%;
        position: relative;
        }
        body {
        margin: 0;
        margin-bottom: 40px;
        font-family: Arial, Helvetica, sans-serif;
        }
        footer {
        background-color: #0070BA;
        position: absolute;
        bottom: 0;
        width: 100%;
        height: 40px;
        color: white;
        }
        #table {
          font-family: Arial, Helvetica, sans-serif;
          border-collapse: collapse;
          width: 100%;
        }

        #table td, #table th {
          border: 1px solid #ddd;
          padding: 1px;
        }

        #table tr:nth-child(even){background-color: #f2f2f2;}

        #table tr:hover {background-color: #ddd;}

        #table th {
          padding-top: 8px;
          padding-bottom: 8px;
          text-align: left;
          background-color: #0070BA;
          color: white;
        }

        .container {
        font-size: 0; /* Elimina el espacio entre los elementos en línea */
        }

        .div1, .div2 {
        display: inline-block;
        width: 50%;
        vertical-align: top;
        font-size: 16px; /* Restaura el tamaño de fuente a su valor normal */
        }


        .tableMod {
        border-collapse: collapse;
        text-align: left;
        width: 100%;
        }

        .tdMod {
        padding: 8px;
        }

        .tdMod:first-child {
        text-align: left;
        }

        .tdMod:last-child {
        text-align: left;
        }

        .titulo{
            font-weight: bold;
        }

        .colorMod{
            color: black;
        }


        </style>
</head>
<body>
    <div class="content" style="text-align: center;">
        <img width="200px" height="auto" style="display: block;margin-left:auto; margin-right:auto;" src="https://cftestataldeaysen.cl/wp-content/uploads/2021/11/Logo-CFT-Estatal-Aysen-color-transp.png"
            alt="logo camanchaca">
    </div>
    <h3 class="colorMod">Reporte de actividades CFTAysén</h3>
    <div>
        <h4 class="colorMod" style="margin-top:1px">Fecha de reporte: desde {{\Carbon\Carbon::parse($fechaInicio)->format('d-m-Y') }} hasta
            {{\Carbon\Carbon::parse($fechaFinal)->format('d-m-Y') }}</h4>
    </div>
    <table id="table">
        <tr>
            <th class="tdMod colorMod titulo">Sede:</th>
            <td class="tdMod colorMod " style="text-align: center;">
                {{$sede != null ? $sede : "No especifica."}}
            </td>
        </tr>
        <tr>
            <th class="tdMod colorMod titulo">Componente:</th>
            <td class="tdMod colorMod " style="text-align: center;">
                {{$componente != null ? $componente : "No especifica."}}
            </td>
        </tr>
        <tr>
            <th class="tdMod colorMod titulo">Tipo de actividad:</th>
            <td class="tdMod colorMod " style="text-align: center;">
                <span>{{$tipoAct != null ? $tipoAct : "No especifica."}}</span>
            </td>
        </tr>
        <tr>
            <th class="tdMod colorMod titulo">Cantidad de iniciativas:</th>
            <td class="tdMod colorMod " style="text-align: center;">
                <span>{{$cantidadIniciativas}}</span>
            </td>
        </tr>
        <tr>
            <th class="tdMod colorMod titulo">Cantidad de estudiantes:</th>
            <td class="tdMod colorMod" style="text-align: center;">
                <span>{{$cantidadEstudiantes}}</span>
            </td>
        </tr>
        <tr>
            <th class="tdMod colorMod titulo">Cantidad de docentes:</th>
            <td class="tdMod colorMod" style="text-align: center;">
                <span>{{$cantidadDocentes}}</span>
            </td>
        </tr>
    </table>
    <footer style="text-align: center;">PDF generado en: <a style="font-weight:bold; color:white;" href="cftaysen.vinculamos.org">cftaysen.vinculamos.org</a> | CFT Estatal Región de Aysén</footer>
</body>
</html>
