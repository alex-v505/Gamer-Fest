@section('title', __('Equipos-Inscritos'))
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div style="display: flex; justify-content: space-between; align-items: center;">
                        
                        <div class="float-left">
                            <h4><i class="fab fa-laravel text-info"></i>
                                Jugadores Inscritos </h4>
                        </div>
                        <div class="col-3 col-sm-3">
                            <a href="{{route('viewEquiposIns-pdf')}}">
                                <div class="btn btn-sm btn-primary">
                                    <i class="fa fa-eye"></i> Ver PDF
                                </div>
                            </a>
                            <a href="{{route('downloadEquiposIns-pdf')}}">
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
                                    <th colspan="5" class="text-center">Equipos Inscritos</th>
                                </tr>
                                <tr>
                                    <td>#</td>
                                    <th>Nombre </th>
                                    <th>Descripcion </th>
                                    <th>Juego </th>
                                    <th>Precio </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($equiposIns as $row)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $row->equipos->nombre_equ }}</td>
                                    <td>{{ $row->equipos->descripcion_equ }}</td>
                                    <td>{{ $row->juegos->nombre_jue }}</td>
                                    <td>{{ $row->precio_ins_equ }}</td>
                                    @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>