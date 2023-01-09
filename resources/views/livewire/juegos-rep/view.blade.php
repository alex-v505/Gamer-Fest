@section('title', __('Jugadores-Inscritos'))
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div style="display: flex; justify-content: space-between; align-items: center;">
                        
                        <div class="float-left">
                            <h4><i class="fab fa-laravel text-info"></i>
                                Juegos </h4>
                        </div>
                        <div class="col-3 col-sm-3">
                            <a href="{{route('viewJuegosRep-pdf')}}">
                                <div class="btn btn-sm btn-primary">
                                    <i class="fa fa-eye"></i> Ver PDF
                                </div>
                            </a>
                            <a href="{{route('downloadJuegosRep-pdf')}}">
                                <div class="btn btn-sm btn-info">
                                    <i class="fa fa-eye"></i> Descargar PDF
                                </div>
                            </a>
                        </div>
                        @if (session()->has('message'))
                        <div wire:poll.4s class="btn btn-sm btn-success" style="margin-top:0px; margin-bottom:0px;">
                            {{ session('message') }} </div>
                        @endif
                        

                    </div>
                </div>


				<div class="card-body">

				<div class="table-responsive">
					<table class="table table-bordered table-sm">
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
            </div>
        </div>
    </div>
</div>