@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1 class="pull-left">Categorias
        </h1>

        <br/> 
        @include('backend.buscar',['url'=>'categorias?search'])

        <h1 class="pull-right">
           <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{!! route('backend.categorias.create') !!}">Nueva Categoria</a>
        </h1>
    </section>

    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                    @include('backend.categorias.table')
            </div>
        </div>
    </div>
@endsection

