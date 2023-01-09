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
            <center> <H1>REPORTE DE JUEGOS</H1></center>
            <table class="table table-dark ">
						<thead class="thead">
							<tr> 
								<td>#</td> 
								<th>Aula</th>
								<th>Categoria</th>
								<th>Nombre </th>
								<th>Compania </th>
								<th>Precio </th>
								<th>Descripcion </th>
							</tr>
						</thead>
						<tbody>
							@foreach($juegos as $row)
							<tr>
								<td>{{ $loop->iteration }}</td> 
								<td>{{ $row->aulas->codigo_aul }}</td>
								<td>{{ $row->categorias->tipo_cat }}</td>
								<td>{{ $row->nombre_jue }}</td>
								<td>{{ $row->compania_jue }}</td>
								<td>{{ $row->precio_jue }}</td>
								<td>{{ $row->descripcion_jue }}</td>
								
							@endforeach
						</tbody>
					</table>

            </div>

        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>