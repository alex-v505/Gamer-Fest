@section('title', __('Partida Equs'))
<div class="container-fluid">
	<div class="row justify-content-center">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<div style="display: flex; justify-content: space-between; align-items: center;">
						<div class="float-left">
							<h4><i class="fab fa-laravel text-info"></i>
							Partida Equ Listing </h4>
						</div>
						<div wire:poll.60s>
							<code><h5>{{ now()->format('H:i:s') }} UTC</h5></code>
						</div>
						@if (session()->has('message'))
						<div wire:poll.4s class="btn btn-sm btn-success" style="margin-top:0px; margin-bottom:0px;"> {{ session('message') }} </div>
						@endif
						<div>
							<input wire:model='keyWord' type="text" class="form-control" name="search" id="search" placeholder="Search Partida Equs">
						</div>
						<div class="btn btn-sm btn-info" data-toggle="modal" data-target="#createDataModal">
						<i class="fa fa-plus"></i>  Add Partida Equs
						</div>
					</div>
				</div>
				
				<div class="card-body">
						@include('livewire.partida-equs.create')
						@include('livewire.partida-equs.update')
				<div class="table-responsive">
					<table class="table table-bordered table-sm">
						<thead class="thead">
							<tr> 
								<td>#</td> 
								<th>Id Equ1</th>
								<th>Id Equ2</th>
								<th>Ganador Par Equ</th>
								<th>Fecha Par Equ</th>
								<th>Observacion Par Equ</th>
								<td>ACTIONS</td>
							</tr>
						</thead>
						<tbody>
							@foreach($partidaEqus as $row)
							<tr>
								<td>{{ $loop->iteration }}</td> 
								<td>{{ $row->id_equ1 }}</td>
								<td>{{ $row->id_equ2 }}</td>
								<td>{{ $row->ganador_par_equ }}</td>
								<td>{{ $row->fecha_par_equ }}</td>
								<td>{{ $row->observacion_par_equ }}</td>
								<td width="90">
								<div class="btn-group">
									<button type="button" class="btn btn-info btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									Actions
									</button>
									<div class="dropdown-menu dropdown-menu-right">
									<a data-toggle="modal" data-target="#updateModal" class="dropdown-item" wire:click="edit({{$row->id}})"><i class="fa fa-edit"></i> Edit </a>							 
									<a class="dropdown-item" onclick="confirm('Confirm Delete Partida Equ id {{$row->id}}? \nDeleted Partida Equs cannot be recovered!')||event.stopImmediatePropagation()" wire:click="destroy({{$row->id}})"><i class="fa fa-trash"></i> Delete </a>   
									</div>
								</div>
								</td>
							@endforeach
						</tbody>
					</table>						
					{{ $partidaEqus->links() }}
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
