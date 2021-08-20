@extends('layouts.app')

@section('main-content')
<div class="row">
    <div class='col-md-12'>
        <!-- small box -->
        @if (count($errors) > 0)
            <div class="alert alert-danger">
               <!-- <strong>Whoops!</strong> {{ trans('adminlte_lang::message.someproblems') }}<br><br> -->
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class='card card-primary'>
            <div class='card-header with-border'>
                <h3 class='card-title'>Cadastrar edital</h3>
            </div>
            {!! Form::open(array('route' => 'edital.store','method'=>'POST', 'id'=>'formEdital')) !!}
                {{ csrf_field() }}
                <div class="card-body">
                    <div class="row">
                        <div class="form-group col-md-8">
                        <label>Título*</label>
                            {!! Form::text('titulo', null, array('placeholder' => 'Digite o titulo','class' => 'form-control')) !!}
                            <input type="hidden" name="status" value="Ativo" required>
                            <input type="hidden" name="campos_extras" id="campos_extras" value require>
                        </div>
                        <div class="form-group col-md-4">
                            <label>Numero*</label>
                            {!! Form::text('numero', null, array('placeholder' => 'Digite o numero','class' => 'form-control')) !!}
                        </div>
                        <div class="form-group col-md-4">
                            <label>Tipo*</label>
                            {!! Form::select('tipo', ['teste','teste2'], null, array('class' => 'form-control', 'placeholder' => 'Escolha um tipo')) !!}
                        </div>
                        <div class="form-group col-md-4">
                            <label>Data de Abertura*</label>
                            {!! Form::date('data_abertura', null, array('class' => 'form-control')) !!}
                        </div>
                        <div class="form-group col-md-4">
                            <label>Data de Encerramento*</label>
                            {!! Form::date('data_encerramento', null, array('class' => 'form-control')) !!}
                        </div> 
                    </div>
                    <div class="form-group col-md-12">   
                        <label>Selecione os campos extras*</label>
                        <div id="fb-editor"></div>
                        <div id="fb-rendered-form">
                            <form id="form" action="#"></form>
                        </div>
                    </div>
                </div>
                <div class="card-footer float-right">
                    {!! Form::submit('Salvar', array('id' => 'salvar', 'class' => 'btn btn-primary')) !!} 
                </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection

@section('script-form')
    <script src="{{asset('/js/form-builder-edital/jquery.min.js')}}"></script>
    <script src="{{asset('/js/form-builder-edital/jquery-ui.min.js')}}"></script>
    <script src="{{asset('/js/form-builder-edital/form-builder.min.js')}}"></script>
    <script src="{{asset('/js/form-builder-edital/form-render.min.js')}}"></script>
    <!-- <script src="https://formbuilder.online/assets/js/form-builder.min.js"></script> -->
    <!-- <script src="https://formbuilder.online/assets/js/form-render.min.js"></script> -->
    <script src="{{asset('/js/form-builder-edital/edital-form.js')}}"></script>
@endsection

@section('layout-form')
<link rel="stylesheet" href="{{asset('/css/form-builder-edital/formBuilder.css')}}"/>
<!-- <link rel="stylesheet" media="all" href="https://cpwebassets.codepen.io/assets/embed/embed-5a8968e8fdae96302fed120f7315b34912ebf28814995f2781a9e66077ca4fab.css"> -->
<!-- <link rel="stylesheet" media="all" href="https://cpwebassets.codepen.io/assets/editor/themes/tomorrow-night-180bfc84346dd501bd16f7606d0747d2dd6fd37ae22b56176805ddc3b4e18720.css"> -->
<link rel="stylesheet" media="all" href="{{asset('/css/form-builder-edital/embed-5a8968e8fdae96302fed120f7315b34912ebf28814995f2781a9e66077ca4fab.css')}}">
<link rel="stylesheet" media="all" href="{{asset('/css/form-builder-edital/tomorrow-night-180bfc84346dd501bd16f7606d0747d2dd6fd37ae22b56176805ddc3b4e18720.css')}}">
<style type='text/css'>
    body{
        overflow-y: scroll;
        height: 600px !important;
    }
</style>
@endsection