@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>Dashboard</h1>
@stop

@section('content')
<div class="row">
    <div class="col-lg-3 col-6">

        <div class="small-box bg-info">
            <div class="inner">
                <h3>150</h3>
                <p>Usuarios en linea</p>
            </div>
            <div class="icon">
                <i class="fas fa-user"></i>
            </div>
        </div>
    </div>

    <div class="col-lg-3 col-6">

        <div class="small-box bg-success">
            <div class="inner">
                <h3>530</h3>
                <p>Visitas totales</p>
            </div>
            <div class="icon">
                <i class="	far fa-eye"></i>
            </div>
        </div>
    </div>

    <div class="col-lg-3 col-6">

        <div class="small-box bg-warning">
            <div class="inner">
                <h3>440</h3>
                <p>Usuarios registrados</p>
            </div>
            <div class="icon">
                <i class="fas fa-user-plus"></i>
            </div>

        </div>
    </div>

    <div class="col-lg-3 col-6">

        <div class="small-box bg-danger">
            <div class="inner">
                <h3>65</h3>
                <p>Visitantes diarios</p>
            </div>
            <div class="icon">
                <i class="fas fa-eye"></i>
            </div>
        </div>
    </div>

</div>
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">

                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Participantes</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-tool" data-card-widget="remove">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="chart">
                            <div class="chartjs-size-monitor">
                                <div class="chartjs-size-monitor-expand">
                                    <div class=""></div>
                                </div>
                                <div class="chartjs-size-monitor-shrink">
                                    <div class=""></div>
                                </div>
                            </div>
                            <canvas id="areaChart"
                                style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%; display: block; width: 478px;"
                                width="478" height="250" class="chartjs-render-monitor"></canvas>
                        </div>
                    </div>

                </div>


                <div class="card card-danger">
                    <div class="card-header">
                        <h3 class="card-title">Partidas Totales</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-tool" data-card-widget="remove">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="chartjs-size-monitor">
                            <div class="chartjs-size-monitor-expand">
                                <div class=""></div>
                            </div>
                            <div class="chartjs-size-monitor-shrink">
                                <div class=""></div>
                            </div>
                        </div>
                        <canvas id="donutChart"
                            style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%; display: block; width: 478px;"
                            width="478" height="250" class="chartjs-render-monitor"></canvas>
                    </div>

                </div>




            </div>

            <div class="col-md-6">
                <div class="card card-danger">
                    <div class="card-header">
                        <h3 class="card-title">Ganancias recaudadas</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-tool" data-card-widget="remove">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="chartjs-size-monitor">
                            <div class="chartjs-size-monitor-expand">
                                <div class=""></div>
                            </div>
                            <div class="chartjs-size-monitor-shrink">
                                <div class=""></div>
                            </div>
                        </div>
                        <canvas id="pieChart"
                            style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%; display: block; width: 478px;"
                            width="478" height="250" class="chartjs-render-monitor"></canvas>
                    </div>

                </div>

                <div class="card card-info">
                    <div class="card-header">
                        <h3 class="card-title">Juegos registrados</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-tool" data-card-widget="remove">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="chart">
                            <div class="chartjs-size-monitor">
                                <div class="chartjs-size-monitor-expand">
                                    <div class=""></div>
                                </div>
                                <div class="chartjs-size-monitor-shrink">
                                    <div class=""></div>
                                </div>
                            </div>
                            <canvas id="lineChart"
                                style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%; display: block; width: 478px;"
                                width="478" height="250" class="chartjs-render-monitor"></canvas>
                        </div>
                    </div>

                </div>




            </div>

        </div>

    </div>

    </div>
</section>


@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script>
console.log('Hi!');
</script>
@stop