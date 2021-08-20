@extends('layouts.app')

@section('main-content')

@section('card_title', 'Inscritos')
@section('table-body')

<table class="table table-hover" id="inscritos">
    <thead>
        <tr>
            <th>Seleção</th>
            <th>Nome</th>
            <th>Curso</th>
            <th>Telefone</th>
            <th>Status</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <!-- <tr>
            <td>001/2021</td>
            <td>Novo Edital teste</td>
            <td>02/04/2021</td>
            <td>10/04/2021</td>    
            <td>aberto</td>
            <td>
                <button type='button' onclick='fechar(46);' class='btn btn-block btn-danger btn-xs'>FECHAR</button>
            </td>    
        </tr>    -->
    </tbody>
    <tfoot>
        <tr>
            <th>Seleção</th>
            <th>Nome</th>
            <th>Curso</th>
            <th>Telefone</th>
            <th>Status</th>
            <th></th>
        </tr>
    </tfoot>
</table>
@endsection
@section('table')
<script>
    $(function ($) {
        $('#inscritos').DataTable(
            {
                "paging": true,
                "lengthChange": true,
                "searching": true,
                "ordering": true,
                "info": true,
                "autoWidth": true,
                "lengthMenu": [[5, 10, 15, -1], [5, 10, 15, "Todos"]],
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