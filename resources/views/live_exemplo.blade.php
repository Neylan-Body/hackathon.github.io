@extends('layouts.app')

@section('contentheader_title', '')

@section('main-content')
    <div class="row">
        <div class="col-md-12">
            <div class='card'>
                <div class="card-body">
                    <div class="row">
                        <div class="form-group col-md-8">
                            <div class="timeline-item">
                                <!-- <span class="time"><i class="fa fa-clock-o"></i> 5 days ago</span> -->
                                <h3 class="timeline-header">Conversa com Psicologo</h3>
                                <div class="timeline-body">
                                    <div class="embed-responsive embed-responsive-16by9">
                                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/tMWkeBIohBs" frameborder="0" allowfullscreen=""></iframe>
                                    </div>
                                </div>
                            </div>  
                        </div> 
                        <div class="col-md-4">
                            <div class="box direct-chat direct-chat-blue">
                                <div class="box-header with-border">
                                    <h3 class="box-title">Chat</h3>
                                </div>
                                <!-- /.box-header -->
                                <div class="box-body" > 
                                    <!-- Conversations are loaded here -->
                                    <div class="direct-chat-messages">
                                    <!-- Message. Default to the left -->
                                        <div class="direct-chat-msg">
                                            <div class="direct-chat-info clearfix">
                                            <span class="direct-chat-name pull-left">Neylan Oliveira</span>
                                            <span class="direct-chat-timestamp pull-right">23 Ago 2:00 pm</span>
                                            </div>
                                            <!-- /.direct-chat-info -->
                                            <!-- <img class="direct-chat-img" src="../dist/img/user1-128x128.jpg" alt="message user image"> -->
                                            <!-- /.direct-chat-img -->
                                            <div class="direct-chat-text">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                            </div>
                                            <!-- /.direct-chat-text -->
                                        </div>
                                        <!-- /.direct-chat-msg -->

                                        <!-- Message to the right -->
                                        <div class="direct-chat-msg right">
                                            <div class="direct-chat-info clearfix">
                                            <span class="direct-chat-name pull-right">Wellington</span>
                                            <span class="direct-chat-timestamp pull-left">23 Ago 2:05 pm</span>
                                            </div>
                                            <!-- /.direct-chat-info -->
                                            <!-- <img class="direct-chat-img" src="../dist/img/user3-128x128.jpg" alt="message user image"> -->
                                            <!-- /.direct-chat-img -->
                                            <div class="direct-chat-text">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                            </div>
                                            <!-- /.direct-chat-text -->
                                        </div>
                                        <div class="direct-chat-msg right">
                                            <div class="direct-chat-info clearfix">
                                            <span class="direct-chat-name pull-right">Idael</span>
                                            <span class="direct-chat-timestamp pull-left">23 Ago 2:10 pm</span>
                                            </div>
                                            <!-- /.direct-chat-info -->
                                            <!-- <img class="direct-chat-img" src="../dist/img/user3-128x128.jpg" alt="message user image"> -->
                                            <!-- /.direct-chat-img -->
                                            <div class="direct-chat-text">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                            </div>
                                            <!-- /.direct-chat-text -->
                                        </div>
                                        <!-- /.direct-chat-msg -->
                                        <div class="direct-chat-msg">
                                            <div class="direct-chat-info clearfix">
                                            <span class="direct-chat-name pull-left">Neylan Oliveira</span>
                                            <span class="direct-chat-timestamp pull-right">23 Ago 2:15 pm</span>
                                            </div>
                                            <!-- /.direct-chat-info -->
                                            <!-- <img class="direct-chat-img" src="../dist/img/user1-128x128.jpg" alt="message user image"> -->
                                            <!-- /.direct-chat-img -->
                                            <div class="direct-chat-text">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                            </div>
                                            <!-- /.direct-chat-text -->
                                        </div>
                                        <div class="direct-chat-msg right">
                                            <div class="direct-chat-info clearfix">
                                            <span class="direct-chat-name pull-right">Wellington</span>
                                            <span class="direct-chat-timestamp pull-left">23 Ago 2:20 pm</span>
                                            </div>
                                            <!-- /.direct-chat-info -->
                                            <!-- <img class="direct-chat-img" src="../dist/img/user3-128x128.jpg" alt="message user image"> -->
                                            <!-- /.direct-chat-img -->
                                            <div class="direct-chat-text">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                            </div>
                                            <!-- /.direct-chat-text -->
                                        </div>
                                    </div>
                                    <!--/.direct-chat-messages-->

                                    <!-- Contacts are loaded here -->
                                    
                                </div>
                                <!-- /.box-body -->
                                <div class="box-footer">
                                    <div class="input-group">
                                        <input type="text" name="message" placeholder="Type Message ..." class="form-control">
                                        <span class="input-group-btn">
                                            <button type="button" class="btn btn-primary btn-flat">Send</button>
                                        </span>
                                    </div>
                                </div>
                                <!-- /.box-footer-->
                            </div>
                        </div> 
                    </div>  
                </div>  
            </div>  
        </div>
    </div>
@endsection