@extends('layouts.app')

@section('contentheader_title', 'Banca Seleção PARTE I')

@section('main-content')
@section('card_title', 'Bancas')
@section('table-body')
<button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal" data-titulo="Cadastrar Usuário">
    <i class="fa fa-plus"> Adicionar </i>
</button>
<table class="table table-hover" id="banca">
    <thead>
        <tr>
            <th>Seleção</th>
            <th>Presidente</th>
            <th>Membro 2</th>
            <th>Membro 3</th>
            <th>Departamento</th>
            <th>Campus</th>
            <th>Data</th>
            <th>Status</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
    </tbody>
</table>
<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display: none;">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h3 class="modal-title">Cadastrar Banca</h3>
        </div>
        <div class="modal-body">
            <form id="form" method="post">
            <div class="card-body">
                <div class="row">
                    <div class="form-group col-md-12">
                        <label>Seleção</label>
                        <select class="form-control" name="selecao" id="selecao" required="">
                        </select>
                        <input type="hidden" id="id" name="id" class="form-control" required="" value="">
                    </div>
                    <div class="form-group col-md-4">
                        <label>Presidente</label>
                        <input type="text" name="presidente" id="presidente" class="form-control" required="">
                    </div>
                    <div class="form-group col-md-4">
                        <label>Membro 2</label>
                        <input type="text" name="membro_2" id="membro_2" class="form-control" required="">  
                    </div>
                    <div class="form-group col-md-4">
                        <label>Membro 3</label>
                        <input type="text" name="membro_3" id="membro_3" class="form-control" required="">
                    </div>
                    <div class="form-group col-md-4">
                        <label>Data</label>
                        <input type="date" name="data" id="data" class="form-control" required>  
                    </div>
                    <div class="form-group col-md-4">
                        <label>Departamento</label>
                        <input type="text" name="departamento" id="departamento" class="form-control" required="">
                    </div>
                    <div class="form-group col-md-4">
                        <label>Campus</label>
                        <select class="form-control" name="campus" id="campus" required="">
                        </select>
                    </div>
                </div> 
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Sair</button>
            <input type="submit" class="btn btn-primary" value="Salvar">
        </div>
    </div>
</div>
@endsection
<!-- /.row -->
@section('table')
<script>
    $(function ($) {
        $('#banca').DataTable(
            {
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": true,
                language: {
                    url: 'https://cdn.datatables.net/plug-ins/1.10.24/i18n/Portuguese-Brasil.json'
                },
            },
        )
        $('.invisible').removeClass('invisible').addClass('visible');
    });
</script>
@endsection

@endsection