<?php

// Configurar la zona horaria (ajusta según tu ubicación)
date_default_timezone_set('America/Caracas');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reporte De Autobuses</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-t4yDGIgoO8ZO//kB3ar/Zns+gP+nqq7v/K/hrGoj3Hjlbt9qD659Cod4/0+EOeye5hHjJSC3noN8AHjZkf+1Z+dT"
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Scripts -->
    <style>
        /*

        body {
            font-family: Arial;
        }

        #main-container {
            margin: 150px auto;
            width: 600px;
        }

        /* h1{
    color: black;
    text-align: center;
} */
        table {
            background-color: white;
            text-align: left;
            border-collapse: collapse;
            margin: 0%;
        }

        th,
        td {
            padding: 20px;
        }

        thead {
            background-color: #22303F;
            border-bottom: solid 5px #22303F;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #ddd;
        }

        tr:hover td {
            background-color: #1263f8;
            color: white;
        }
        td {
         background-color: #F0FFFF;
             }

    </style>
</head>

<body>
    <div class="container" style="display: flex; align-items: center;">
        <div class="logo" style="margin-right: 20px;">
            <h1>Servicio De Rutas </h1>
            <h2>TecnoInnova C.A</h2>
        </div>
        <div class="contact">
            <p>(+58) 412-7756046 / (+58) 424-6334784<br><br>
            Venezuela, Estado Zulia</p>
        </div>
    </div>

    <h3>Reporte de Autobuses</h3>


    <div>
        <table>
            <thead>
                <tr>
                    <th>Marca</th>
                    <th>Modelo</th>
                    <th>Placa</th>
                    <th>Color</th>
                    <th>Capacidad</th>
                    <th>Ultima Modificacion</th>
                    <th>Fecha Creacion</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($autobuses as $autobus)
                    <tr>
                        <td>{{ $autobus->marca }}</td>
                        <td>{{ $autobus->modelo }}</td>
                        <td>{{ $autobus->placa }}</td>
                        <td>{{ $autobus->color }}</td>
                        <td>{{ $autobus->capacidad }}</td>
                        <td>{{ $autobus->updated_at->format('d/m/Y')}}</td>
                        <td>{{ $autobus->created_at->format('d/m/Y') }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>
</body>

</html>
