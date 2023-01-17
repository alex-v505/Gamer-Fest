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
            @if($equiposIns)
                    <div class="table-responsive">
                        <table class="table table-bordered table-sm">
                            <thead class="thead">
                                <tr>
                                    <th colspan="6" class="text-center">Equipos Inscritos</th>
                                </tr>
                                @for ($i = 0; $i < 1 ; $i++)
                                <tr>
                                    <th colspan="6" class="text-center">{{ $equiposIns[$i]->nombre_equ }}</th>
                                </tr>
                                <tr>
                                    <th colspan="6">
                                        Descripcion: {{ $equiposIns[$i]->descripcion_equ }}
                                        Precio de la incripcion: {{ $equiposIns[$i]->precio_ins_equ }}</th>

                                </tr>
                                @endfor
                                <tr>
                                    <td>#</td>
                                    <th>Nombre </th>
                                    <th>Descripcion </th>
                                    <th>Juego </th>
                                    <th>Precio </th>
                                    <th>Precio </th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($equiposIns as $row)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $row->nombre_jug }}</td>
                                    <td>{{ $row->cedula_jug }}</td>
                                    <td>{{ $row->telefono_jug }}</td>
                                    <td>{{ $row->correo_jug }}</td>
                                    <td>{{ $row->descripcion_jug }}</td>
                                    @endforeach
                            </tbody>
                        </table>
                    </div>
                    @endif
            </div>

        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>