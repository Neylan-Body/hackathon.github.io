@extends('layouts.app')

@section('contentheader_title', 'Consultar Matrícula')
@section('breadcrumb')
    <ol class="breadcrumb">
        <li><a href="Consulta-Segunda-Via"><i class="fa fa-files-o"></i> Consultar matrícula</a></li>
    </ol>
@endsection

@section('main-content')
<!-- Main content -->
    <div class="row">
        <div class="col-md-12">
            <!-- /.box -->
            <!-- general form elements disabled -->
            <div class="row">
                <div class='col-md-12'>
                    <!-- small box -->
                    <div class='box box-primary'>
                        <div class='box-body'>
                            <div class="login-box">
                                <div class="login-logo">
                                    <a href="#"><b>Verificar Matrícula</b></a>
                                </div>
                                <div class="login-box-body" style="max-width:400px">
                                    <p class="login-box-msg">Digite seu cpf para verificar a sua matrícula!</p>
                                    <form method="post" action="/verificar-matricula">
                                        <div class="form-group has-feedback">
                                            <input type="text" id="cpf" name="cpf" class="form-control" data-inputmask="&quot;mask&quot;: &quot;999999999-99&quot;" data-mask="" maxlength="24" required="">
                                        </div>

                                        <div class="row">
                                            <div class="col-xs-8">
                                                <div class="checkbox icheck">
                                                </div>
                                            </div>
                                            <!-- /.col -->
                                            <div class="col-xs-4">
                                                <button type="submit" class="btn btn-primary btn-block btn-flat">VERIFICAR</button>
                                            </div>
                                            <!-- /.col -->
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection