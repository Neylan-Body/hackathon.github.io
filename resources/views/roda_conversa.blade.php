@extends('layouts.app')

@section('contentheader_title', 'Rodas de conversa nas Universidades')

@section('main-content')
    <div class="row">
        <div class="col-md-12">
            <!-- /.box -->
            <!-- general form elements disabled -->
            <div class="row">
                <div class='col-md-4'>
                    <!-- small box -->
                    <div class='small-box bg-white'>
                        <div class='inner'>
                            <h4><strong>Conversa com Psicologo</strong></h4>
                            <strong>Universidade Estadual do Sudoeste da Bahia</strong>
                            <img src="{{ asset('img/saudemental1.jpeg')}}" alt="" srcset=""><br>
                            
                        </div>
                    </div>
                </div>
                <div class='col-md-4'>
                    <!-- small box -->
                    <div class='small-box bg-white'>
                        <div class='inner'>
                            <h4><strong>Conversa com Psicologo</strong></h4>
                            <strong>Universidade Federal do Reconcavo da Bahia</strong>
                            <img src="{{ asset('img/saudemental2.jpeg')}}" alt="" srcset=""><br>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection