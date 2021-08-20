@extends('layouts.app')

@section('main-content')
@section('card_title', 'Usuários')
@section('table-body')
<button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal" data-titulo="Cadastrar Usuário">
    <i class="fa fa-plus"> Adicionar </i>
</button>
<table class="table table-hover" id="usuario">
    <thead>
        <tr>
            <th>Nome</th>
            <th>Login</th>
            <th>Tipo</th>
            <th>Status</th>
            <th></th>
        </tr>
    </thead>
    <tbody>  
</table>
<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display: none;">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h3 class="modal-title">Cadastrar Usuário</h3>
        </div>
        <div class="modal-body">
            <form id="form" method="POST">
            <div class="box-body">  
                <div class="form-group col-md-8">
                    <label>Nome</label>
                    <input type="text" name="name" id="nome" class="form-control" required="">
                    <input type="hidden" id="id" name="id" class="form-control" required="" value="">
                </div>
                <div class="form-group col-md-8">
                    <label>Tipo</label>
                    <select class="form-control" name="tipo" id="tipo" required="">
                        <option value="admin">Administrador</option>
                        <option value="professor">Professor</option>
                        <option value="proex">Proex</option>
                        <option value="ppg">PPG</option>
                        <option value="agespi">AGESPI</option>
                        <option value="coordenador">Coordenador</option>
                    </select>    
                </div>
                <div class="form-group col-md-8">
                    <label>Email</label>
                    <input type="text" name="email" id="email" class="form-control" required="">
                </div>
                <div class="form-group col-md-8">
                    <label>Senha</label>
                    <input type="password" name="password" id="password" class="form-control" required="">  
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
@section('table')
<script src="js/listar-usuario.js"></script>
<script>
    $(function ($) {
        $('.invisible').removeClass('invisible').addClass('visible');
    });
</script>
@endsection

@endsection