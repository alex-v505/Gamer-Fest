@section('title', __('Equipos-Inscritos'))
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div style="display: flex; justify-content: space-between; align-items: center;">

                        <div class="float-left">
                            <h4><i class="fab fa-laravel text-info"></i>
                                Equipos Inscritos </h4>
                        </div>
                        <form class="col-4">
                        <select wire:model="nombre_equ" type="text" class="form-control" id="nombre_equ"
                            placeholder="Equipo">@error('nombre_equ') <span class="error text-danger">{{ $message }}</span>
                            @enderror
                            <option>Ninguno</option>
                            @foreach($equipos as $equipo)
                            <option value="{{$equipo->nombre_equ}}">{{$equipo->nombre_equ}}</option>
                            @endforeach
                        </select>
                        
                        </form>
                        <div class="col-3 col-sm-3">
                            <a href="{{route('viewEquiposIns-pdf',['nombre_equ' => $nombre_equ])}}">
                                <div class="btn btn-sm btn-primary">
                                    <i class="fa fa-eye"></i> Ver PDF
                                </div>
                            </a>
                            <a href="{{route('downloadEquiposIns-pdf',['nombre_equ' => $nombre_equ])}}">
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
    </div>
</div>