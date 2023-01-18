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
    <div class="container-md">
        <div class="row justify-content-center">
            <div class="col">
                <div class="table-responsive">
                    <center> <H3><font color="black" face="Comic Sans MS,arial,verdana">Reporte de Recaudacion Individual</font></H3></center>
                    <table class="table border border-dark">
                        <thead class="thead">
                            <tr class="border border-dark">
                                <td class="table-info border border-dark">#</td>
                                <th class="table-primary border border-dark">Juego</th>
                                <th class="table-info border border-dark">Cantidad </th>
                                <th class="table-primary border border-dark">SubTotal Inscripcion</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($recaudacionInd as $row)
                            <tr>
                                <td class="table-info border border-dark">{{ $loop->iteration }}</td>
                                <td class="table-primary border border-dark">{{ $row->nombre_jue }}</td>
                                <td class="table-info border border-dark">{{ $row->total }}</td>
                                <td class="table-primary border border-dark">{{ $row->precioIns }}</td>
                                @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="table-responsive">
                 <center> <H3><font color="black" face="Comic Sans MS,arial,verdana">Reporte de Recaudacion en Equipo</font></H3></center>
                    <table class="table border border-dark">
                        <thead class="thead">
                            <tr class="border border-dark">
                                <td class="table-primary border border-dark">#</td>
                                <th class="table-info border border-dark">Juego</th>
                                <th class="table-primary border border-dark">Cantidad </th>
                                <th class="table-info border border-dark">SubTotal Inscripcion</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($recaudacionEqu as $row)
                            <tr>
                                <td class="table-primary border border-dark">{{ $loop->iteration }}</td>
                                <td class="table-info border border-dark">{{ $row->nombre_jue }}</td>
                                <td class="table-primary border border-dark">{{ $row->total }}</td>
                                <td class="table-info border border-dark">{{ $row->precioIns }}</td>
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