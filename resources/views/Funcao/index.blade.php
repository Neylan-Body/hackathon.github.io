@extends('layouts.app')
@section('main-content')
<!-- Main content -->
@section('datatable')
@section('card_title', 'Função')
@section('table-body')
<table class="table table-hover" id="funcao">
    <thead>
        <tr>
            <th>Edital</th>
            <th>Função</th>
        </tr>
    </thead>
    <tbody>
         
    </tbody>
    <tfoot>
        <tr>
            <th>Edital</th>
            <th>Função</th>
        </tr>
    </tfoot>
</table>
@endsection
       <!-- /.row -->
@section('table')
<script>
    $(function ($) {
        $('#funcao').DataTable(
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