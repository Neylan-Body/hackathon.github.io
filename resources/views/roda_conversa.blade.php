@extends('layouts.app')

@section('contentheader_title', 'Rodas de conversa nas Universidades')

@section('main-content')
    <div class="row">
        <div class="col-md-12">
            <!-- /.box -->
            <!-- general form elements disabled -->
            <div class="card">
                <div class="card-header p-2">
                    <ul class="nav nav-pills">
                    <li class="nav-item"><a class="nav-link active" href="#aovivo" data-toggle="tab">Ao vivo</a></li>
                    <li class="nav-item"><a class="nav-link" href="#agendados" data-toggle="tab">Agendados</a></li>
                    </ul>
                </div>
                <div class="card-body">
                    <div class="tab-content">
                        <div class="tab-pane" id="agendados">
                            <!-- Post -->
                            <div class="post">
                                <div class="row">
                                <div class='col-md-4'>
                                        <!-- small box -->
                                        <div class='small-box bg-white'>
                                            <div class='inner'>
                                                <h4><strong>Conversa com Psicologo</strong></h4><i></i>
                                                <strong>Universidade Estadual do Sudoeste da Bahia</strong>
                                                <img src="{{ asset('img/saudemental7.jpeg')}}" alt="" srcset=""><br>
                                                <br>Data agendada - 23/08/2021 as 9:00
                                            </div>
                                        </div>
                                    </div>
                                    <div class='col-md-4'>
                                        <!-- small box -->
                                        <div class='small-box bg-white'>
                                            <div class='inner'>
                                                <h4><strong>Conversa com Psicologo</strong></h4>
                                                <strong>Universidade Federal do Reconcavo da Bahia</strong>
                                                <img src="{{ asset('img/saudemental8.jpeg')}}" alt="" srcset=""><br>
                                                <br>Data agendada - 24/08/2021 as 9:00
                                            </div>
                                        </div>
                                    </div>
                                    <div class='col-md-4'>
                                        <!-- small box -->
                                        <div class='small-box bg-white'>
                                            <div class='inner'>
                                                <h4><strong>Conversa com estagiario de Psicologia</strong></h4>
                                                <strong>Universidade Federal do Sul da Bahia</strong>
                                                <img src="{{ asset('img/saudemental9.png')}}" alt="" srcset=""><br>
                                                <br>Data agendada - 25/08/2021 as 9:00
                                            </div>
                                        </div>
                                    </div>
                                    <div class='col-md-4'>
                                        <!-- small box -->
                                        <div class='small-box bg-white'>
                                            <div class='inner'>
                                                <h4><strong>Conversa com estagiario de Psicologia</strong></h4>
                                                <strong>Universidade Catolica de Salvador</strong>
                                                <img src="{{ asset('img/saudemental10.jpeg')}}" alt="" srcset=""><br>
                                                <br>Data agendada - 26/08/2021 as 9:00
                                            </div>
                                        </div>
                                    </div>
                                    <div class='col-md-4'>
                                        <!-- small box -->
                                        <div class='small-box bg-white'>
                                            <div class='inner'>
                                                <h4><strong>Conversa com estagiario de Psicologia</strong></h4>
                                                <strong>Universidade Estadual de Santa Cruz</strong>
                                                <img src="{{ asset('img/saudemental11.png')}}" alt="" srcset=""><br>
                                                <br>Data agendada - 27/08/2021 as 9:00
                                            </div>
                                        </div>
                                    </div>
                                    <div class='col-md-4'>
                                        <!-- small box -->
                                        <div class='small-box bg-white'>
                                            <div class='inner'>
                                                <h4><strong>Conversa com estagiario de Psicologia</strong></h4>
                                                <strong>Universidade Estadual de Feira de Santana</strong>
                                                <img src="{{ asset('img/saudemental12.jpeg')}}" alt="" srcset=""><br>
                                                <br>Data agendada - 30/08/2021 as 9:00
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane active" id="aovivo">
                            <!-- Post -->
                            <div class="post">
                                <div class="row">
                                    <div class='col-md-4'>
                                        <!-- small box -->
                                        <div class='small-box bg-white'>
                                            <div class='inner'>
                                                <h4><strong>Conversa com Psicologo</strong></h4><i></i>
                                                <strong>Universidade Estadual do Sudoeste da Bahia</strong>
                                                <img src="{{ asset('img/saudemental1.jpeg')}}" alt="" srcset=""><br>
                                                <img src="{{ asset('img/live-icon.png')}}" style="width: 5em;" srcset="">  
                                                - Iniciado as 9:00                                              
                                            </div>
                                            <a href="/live/124hdfds3453" class="small-box-footer">Participar<i class="fa fa-arrow-circle-right"></i></a>
                                        </div>
                                    </div>
                                    <div class='col-md-4'>
                                        <!-- small box -->
                                        <div class='small-box bg-white'>
                                            <div class='inner'>
                                                <h4><strong>Conversa com Psicologo</strong></h4>
                                                <strong>Universidade Federal do Reconcavo da Bahia</strong>
                                                <img src="{{ asset('img/saudemental2.jpeg')}}" alt="" srcset=""><br>
                                                <img src="{{ asset('img/live-icon.png')}}" style="width: 5em;" srcset="">                                                  
                                                - Iniciado as 9:00                                              
                                            </div>
                                            <a href="" class="small-box-footer">Participar<i class="fa fa-arrow-circle-right"></i></a>
                                        </div>
                                    </div>
                                    <div class='col-md-4'>
                                        <!-- small box -->
                                        <div class='small-box bg-white'>
                                            <div class='inner'>
                                                <h4><strong>Conversa com estagiario de Psicologia</strong></h4>
                                                <strong>Universidade Federal do Sul da Bahia</strong>
                                                <img src="{{ asset('img/saudemental3.png')}}" alt="" srcset=""><br>
                                                <img src="{{ asset('img/live-icon.png')}}" style="width: 5em;" srcset="">                                                  
                                                - Iniciado as 9:00                                              
                                            </div>
                                            <a href="" class="small-box-footer">Participar<i class="fa fa-arrow-circle-right"></i></a>
                                        </div>
                                    </div>
                                    <div class='col-md-4'>
                                        <!-- small box -->
                                        <div class='small-box bg-white'>
                                            <div class='inner'>
                                                <h4><strong>Conversa com estagiario de Psicologia</strong></h4>
                                                <strong>Universidade Catolica de Salvador</strong>
                                                <img src="{{ asset('img/saudemental4.jpeg')}}" alt="" srcset=""><br>
                                                <img src="{{ asset('img/live-icon.png')}}" style="width: 5em;" srcset="">                                                  
                                                - Iniciado as 9:00                                              
                                            </div>
                                            <a href="" class="small-box-footer">Participar<i class="fa fa-arrow-circle-right"></i></a>
                                        </div>
                                    </div>
                                    <div class='col-md-4'>
                                        <!-- small box -->
                                        <div class='small-box bg-white'>
                                            <div class='inner'>
                                                <h4><strong>Conversa com estagiario de Psicologia</strong></h4>
                                                <strong>Universidade Estadual de Santa Cruz</strong>
                                                <img src="{{ asset('img/saudemental5.jpeg')}}" alt="" srcset=""><br>
                                                <img src="{{ asset('img/live-icon.png')}}" style="width: 5em;" srcset="">                                                  
                                                - Iniciado as 9:00                                              
                                            </div>
                                            <a href="" class="small-box-footer">Participar<i class="fa fa-arrow-circle-right"></i></a>
                                        </div>
                                    </div>
                                    <div class='col-md-4'>
                                        <!-- small box -->
                                        <div class='small-box bg-white'>
                                            <div class='inner'>
                                                <h4><strong>Conversa com estagiario de Psicologia</strong></h4>
                                                <strong>Universidade Estadual de Feira de Santana</strong>
                                                <img src="{{ asset('img/saudemental6.jpeg')}}" alt="" srcset=""><br>
                                                <img src="{{ asset('img/live-icon.png')}}" style="width: 5em;" srcset="">                                                  
                                                - Iniciado as 9:00                                              
                                            </div>
                                            <a href="" class="small-box-footer">Participar<i class="fa fa-arrow-circle-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>    
        </div>
    </div>
@endsection