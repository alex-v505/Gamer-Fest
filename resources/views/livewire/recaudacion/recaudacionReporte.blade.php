<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
<center>
    <h2>Reporte de Recaudaciones Obtenidas</h2>
    </center>
    <div class="container-md">
        <div class="row justify-content-center">
            <div class="col">
                <div class="table-responsive">
                    <table class="table table-dark table-sm">
                        <thead class="thead">
                            <tr>
                                <th colspan="4" class="text-center"> Recaudacion Inscripciones Individuales</th>
                            </tr>
                            <tr>

                                <td>#</td>
                                <th>Juego</th>
                                <th>Cantidad </th>
                                <th>SubTotal Inscripcion</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($recaudacionInd as $row)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $row->nombre_jue }}</td>
                                <td>{{ $row->total }}</td>
                                <td>{{ $row->precioIns }}</td>
                                @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="table-responsive">
                    <table class="table table-dark table-sm">
                        <thead class="thead">
                            <tr>
                                <th colspan="4" class="text-center"> Recaudacion Inscripciones en Equipo</th>
                            </tr>
                            <tr>

                                <td>#</td>
                                <th>Juego</th>
                                <th>Cantidad </th>
                                <th>SubTotal Inscripcion</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($recaudacionEqu as $row)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $row->nombre_jue }}</td>
                                <td>{{ $row->total }}</td>
                                <td>{{ $row->precioIns }}</td>
                                @endforeach
                        </tbody>
                    </table>
                </div>

            </div>

        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>