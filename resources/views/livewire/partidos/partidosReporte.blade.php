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
    <h2>Reporte de Partidos Jugados</h2>
    </center>
    <div class="container-md">
        <div class="row justify-content-center">
            <div class="col">
                <table class="table table-dark " style="position:relative;">
                    <thead class="thead">
                        <tr>
                            <th colspan="6" class="text-center"> Partidas Individuales</th>
                        </tr>
                        <tr>

                            <td>#</td>
                            <th>Jugador 1 </th>
                            <th>Jugador 2 </th>
                            <th>Ganador </th>
                            <th>Fecha </th>
                            <th>Observacion </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($partidosInd as $row)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $row->jugadors1->nombre_jug }}</td>
                            <td>{{ $row->jugadors2->nombre_jug }}</td>
                            <td>{{ $row->jugadors3->nombre_jug }}</td>
                            <td>{{ $row->fecha_par_ind }}</td>
                            <td>{{ $row->observacion_par_ind }}</td>
                            @endforeach
                    </tbody>
                </table>

            </div>
            <div class="col">
                <div class="table-responsive">
                    <table class="table table-dark" style="position:relative;">
                        <thead class="thead">
                            <tr>
                                <th colspan="6" class="text-center"> Partidas en Equipo</th>
                            </tr>
                            <tr>

                                <td>#</td>
                                <th>Equipo 1</th>
                                <th>Equipo 2</th>
                                <th>Ganador </th>
                                <th>Fecha </th>
                                <th>Observacion </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($partidosEqu as $row)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $row->equipo1->nombre_equ }}</td>
                                <td>{{ $row->equipo2->nombre_equ }}</td>
                                <td>{{ $row->equipo3->nombre_equ }}</td>
                                <td>{{ $row->fecha_par_equ }}</td>
                                <td>{{ $row->observacion_par_equ }}</td>
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