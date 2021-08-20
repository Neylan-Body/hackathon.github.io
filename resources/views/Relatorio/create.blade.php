@extends('layouts.app')

@section('contentheader_title', 'Relatórios')

@section('main-content')
<!-- Main content -->
<div class="row">
           <div class="col-md-12">
               <div class="card card-primary">
                   <div class="card-header with-border">
                   </div>
                   <!-- /.box-header -->
                   <form method="post" id="formFuncao" action="gerar" target="_blank">
                        <div class="card-body">  
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label>Edital</label>
                                    <select class="form-control" name="edital" required="">
                                        <option value="46">001/2021</option>        
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label>Relatório</label>
                                    <select class="form-control" name="relatorio" required="">
                                        <option>Resumido</option>
                                        <option>Completo</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer float-right">
                            <button type="submit" class="btn btn-primary">GERAR</button>
                        </div>
                        <div id="resultado"></div>
                    </form>
                   <!-- /.box-body -->
               </div>
               <!-- /.box -->
           </div>
           <!-- /.col -->
       </div>
       <!-- /.row -->

@endsection