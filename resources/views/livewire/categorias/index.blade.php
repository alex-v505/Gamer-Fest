@extends('adminlte::page')
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @livewire('categorias')
        </div>     
    </div>   
</div>
@endsection
@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop
