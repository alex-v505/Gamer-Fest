@section('title', __('Partidos'))
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div style="display: flex; justify-content: space-between; align-items: center;">

                        <div class="float-left">
                            <h4><i class="fab fa-laravel text-info"></i>
                                Partidos </h4>
                        </div>
                        <div class="col-3 col-sm-3">
                            <a href="{{route('viewPartidos-pdf')}}">
                                <div class="btn btn-sm btn-primary">
                                    <i class="fa fa-eye"></i> Ver PDF
                                </div>
                            </a>
                            <a href="{{route('downloadPartidos-pdf')}}">
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
                    <div class="table-responsive">
                        <table class="table table-bordered table-sm">
                            <thead class="thead">
                                <tr>
                                    <th colspan="6" class="text-center"> Partidas en Equipo</th>
                                </tr>
                                <tr>

                                    <td>#</td>
                                    <th>Equ1</th>
                                    <th>Equ2</th>
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
    </div>
</div>