@section('title', __('Recaudacion'))
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div style="display: flex; justify-content: space-between; align-items: center;">
                        
                        <div class="float-left">
                            <h4><i class="fab fa-laravel text-info"></i>
                                Recaudacion </h4>
                        </div>
                        <div class="col-3 col-sm-3">
                            <a href="{{route('viewRecaudacion-pdf')}}">
                                <div class="btn btn-sm btn-primary">
                                    <i class="fa fa-eye"></i> Ver PDF
                                </div>
                            </a>
                            <a href="{{route('downloadRecaudacion-pdf')}}">
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
                                @foreach($recaudaciones as $row)
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
                        <table class="table table-bordered table-sm">
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
                                @foreach($recaudacionesEqu as $row)
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
    </div>
</div>