<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar sidebar-primary elevation-4 bg-light">
    <a class="nav-link brand-link logo-switch" href="{{ url('/')}}">
        <img src="{{asset('img/logo.png')}}" alt="" class="brand-image-xl logo-xs">
        <!-- <img src="{{asset('img/logo.png')}}" alt="" class="brand-image-xs logo-xl" style="margin-left: 12px">  -->
        <!-- <span class="brand-image-xl logo-xs" ><b>P</b></span> -->
        <!-- logo for regular state and mobile devices -->
        <span class="brand-image-xs logo-xl"><b>PSICO</b>-EDUCA </span>
    </a>
    <!-- sidebar: style can be found in sidebar.less -->
    <div class="sidebar">
        <nav class="mt-2">
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="{{asset('/img/avatar.png')}}" class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                    <a href="#" class="d-block text-dark">Neylan Oliveira</a>
                </div>
            </div>
            
            <ul class="nav nav-pills nav-sidebar flex-column text-dark" data-widget="treeview" role="menu" data-accordion="false">
                <!-- <li class="nav-item has-treeview ">
                    <form class="mav-item has-treeview form-inline my-2">
                        <div class="input-group">
                        <input class="form-control " type="search" placeholder="Search" aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-sidebar">
                            <i class="fas fa-search fa-fw"></i>
                            </button>
                        </div>
                        </div>
                    </form>
                </li> -->
                <li class="nav-item has-treeview ">
                    <a class="nav-link ative" href="/rodadeconversa"><i class="fas fa-users"></i> 
                        <p class="text-dark"> 
                            Rodas de conversa
                            <!-- <i class="fas fa-angle-left right nav-icon"></i> -->
                        </p> 
                    </a>
                </li>
                <!-- <li class="nav-item has-treeview ">
                    <a class="nav-link ative"><i class="fa fa-user"></i> 
                        <p class="text-dark">  
                            Educacional
                            <i class="fas fa-angle-left right"></i>
                        </p> 
                    </a>
                    <ul class="nav nav-treeview"> 
                    <li class="nav-item">
                        <a href="/sistemasdeinformacao" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p class="text-dark"> Sistemas de informação</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p class="text-dark"> Administração</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p class="text-dark"> Agronomia</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p class="text-dark"> Arqueologia</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p class="text-dark"> Arquitetura e Urbanismo</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p class="text-dark"> Artes Visuais</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p class="text-dark"> Artes Visuais</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p class="text-dark"> Biblioteconomia</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p class="text-dark"> Biomedicina</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p class="text-dark"> Ciência da Computação</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p class="text-dark"> Ciências Biológicas</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p class="text-dark"> Ciências Biológicas</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p class="text-dark"> Ciências Atuariais</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p class="text-dark"> Ciências Contábeis</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p class="text-dark"> Ciências Econômicas</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p class="text-dark"> Ciências Naturais</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p class="text-dark"> Ciências Sociais</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p class="text-dark"> Ciências Sociais</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p class="text-dark"> Cinema e Audiovisual</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p class="text-dark"> Dança</p>
                        </a>
                    </li>
                    </ul>
                </li> -->
                <li class="nav-item has-treeview ">
                    <a class="nav-link ative" href="/apps"><i class="fas fa-running"></i> 
                        <p class="text-dark"> 
                            Apps de atividade fisica
                            <!-- <i class="fas fa-angle-left right nav-icon"></i> -->
                        </p> 
                    </a>
                </li>
            </ul>
        </nav>
    </div>
    <!-- /.sidebar -->
</aside>
