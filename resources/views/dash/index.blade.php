@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>Dashboard</h1>
@stop
<?php 
use App\Repositories\DashboardRepository;

$dashboard = new dashboardRepository();
$data = $dashboard->ObtenerData();

?>
@section('content')
<div class="row">
    <div class="col-lg-3 col-6">

        <div class="small-box bg-info">
            <div class="inner">
                <h3>{{$data['dashboardInfo']['cat_count']}}</h3>
                <p>Categorias</p>
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

                        <div class="chartjs-size-monitor">
                            <div class="chartjs-size-monitor-expand">
                                <div class=""></div>
                            </div>
                            <div class="chartjs-size-monitor-shrink">
                                <div class=""></div>
                            </div>
                        </div>
                        <canvas id="inscripcionChart"
                            style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%; display: block; width: 478px;"
                            width="478" height="250" class="chartjs-render-monitor"></canvas>
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
                        <canvas id="categoriaChart"
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
                        <canvas id="partidasChart"
                            style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%; display: block; width: 478px;"
                            width="478" height="250" class="chartjs-render-monitor"></canvas>
                    </div>

                </div>

                <div class="card card-info">
                    <div class="card-header">
                        <h3 class="card-title" id="titulo">Juegos registrados</h3>
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
                            <canvas id="preciosChart"
                                style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%; display: block; width: 478px;"
                                width="478" height="250" class="chartjs-render-monitor"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="card card-info">
                    <div class="card-header">
                        <h3 class="card-title" id="titulo">Juegos registrados</h3>
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
                            <canvas id="juegosChart"
                                style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%; display: block; width: 478px;"
                                width="478" height="250" class="chartjs-render-monitor"></canvas>
                        </div>
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
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.8.0/chart.min.js"></script>
<script>
var userCheckinChart = new Chart(document.getElementById('categoriaChart').getContext('2d'), @json($data[
    'chartCategoria']));
var userCheckinChart = new Chart(document.getElementById('inscripcionChart').getContext('2d'), @json($data[
    'chartInscripcion']));
var userCheckinChart = new Chart(document.getElementById('partidasChart').getContext('2d'), @json($data[
    'chartPartida']));
var userCheckinChart = new Chart(document.getElementById('preciosChart').getContext('2d'), @json($data[
    'chartPrecios']));
var userCheckinChart = new Chart(document.getElementById('juegosChart').getContext('2d'), @json($data['chartJuegos']));
</script>
@stop