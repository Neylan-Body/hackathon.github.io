@extends('layouts.app')

@section('main-content')
    <!-- Main content -->
    @section('card_title', 'Editais cadastrados')
    @section('table-body')
        <table class="table table-hover table-striped" id="edital">
            <thead>
                <tr>
                    <th>Numero</th>
                    <th>Título</th>
                    <th>Data Abertura</th>
                    <th>Data Encerramento</th>
                    <th>Status</th>
                    <th>Opções</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($editais as $key => $edital)
                <tr>
                    <td>{{$edital->numero}}</td>
                    <td>{{$edital->titulo}}</td>
                    <td>{{$edital->data_abertura}}</td>
                    <td>{{$edital->data_encerramento}}</td>    
                    <td>{{$edital->status}}</td>
                    <td>
                        <button type='button' onclick='fechar(46);' class='btn btn-block btn-danger btn-xs'>FECHAR</button>
                    </td>    
                </tr>   
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th>Numero</th>
                    <th>Título</th>
                    <th>Data Abertura</th>
                    <th>Data Encerramento</th>
                    <th>Status</th>
                    <th>Opções</th>
                </tr>
            </tfoot>
        </table>
    @endsection
    @section('table')
        <script>
            $(function ($) {
                $('#edital').DataTable(
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