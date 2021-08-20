<!-- Main Header -->
<div class="wrapper">
    <nav class="main-header navbar navbar-expand bg-light">
        <!-- Sidebar toggle button-->
        <ul class="navbar-nav bg-light">
            <!-- Messages: style can be found in dropdown.less-->
            <li class="nav-item">
                <a class="nav-link bg-light" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            <li>
            <li class="nav-item">
                <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                <i class="fas fa-search"></i>
                </a>
                <div class="navbar-search-block">
                <form class="form-inline">
                    <div class="input-group input-group-sm">
                    <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                    <div class="input-group-append" style="background:white">
                        <button class="btn btn-navbar" type="submit">
                        <i class="fas fa-search"></i>
                        </button>
                        <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                        <i class="fas fa-times"></i>
                        </button>
                    </div>
                    </div>
                </form>
                </div>
            </li>
        </ul>
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">{{ trans('adminlte_lang::message.togglenav') }}</span>
        </a>
        <ul class="dropdown-menu">
            <li class="header">{{ trans('adminlte_lang::message.tasks') }}</li>
            <li>
                <!-- Inner menu: contains the tasks -->
                <ul class="menu">
                    <li><!-- Task item -->
                        <a href="#">
                            <!-- Task title and progress text -->
                            <h3>
                                {{ trans('adminlte_lang::message.tasks') }}
                                <small class="pull-right">20%</small>
                            </h3>
                            <!-- The progress bar -->
                            <div class="progress xs">
                                <!-- Change the css width attribute to simulate progress -->
                                <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                    <span class="sr-only">20% {{ trans('adminlte_lang::message.complete') }}</span>
                                </div>
                            </div>
                        </a>
                    </li><!-- end task item -->
                </ul>
            </li>

            <li class="footer">
                <a href="#">{{ trans('adminlte_lang::message.alltasks') }}</a>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto">
            @if (Auth::guest())
                <li><a class="bg-light" href="{{ url('/login') }}">Área Restrita</a></li>
            @else
                <!-- User Account Menu -->
                <li class="nav-item dropdown user-menu">
                    <a href="#" class="nav-link dropdown-toggle bg-light" data-toggle="dropdown" aria-expanded="false">
                        <i class="fa fa-angle-double-down"></i>
                        <!-- hidden-xs hides the username on small devices so only the image appears. -->
                        <span class="hidden-xs">{{ Auth::user()->name }}</span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <li class="user-footer">
                            <div class="pull-left">
                                <b>Tipo de usuário:</b>
                                    {{ Auth::user()->tipo }}
                                <br>
                            </div>
                            <div class="pull-right row">
                                <div class="col-8"></div>
                                <div class="col-4">
                                    <form action="{{ url('/logout') }}">
                                        <br>
                                        <button type="submit" class="btn btn-default btn-flat">Sair</button>
                                    </form>
                                </div>
                            </div>
                        </li>
                    </ul>
                </li>
            @endif
        </ul>
    </nav>
</div>
