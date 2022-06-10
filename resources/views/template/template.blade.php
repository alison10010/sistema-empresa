<!DOCTYPE html>
<html lang="pt-BR">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>@yield('title')</title>

    <!-- ICONS -->
    <script src="https://kit.fontawesome.com/4ed72f0505.js" crossorigin="anonymous"></script>
    
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/css/bootstrap/sb-admin-2.min.css" rel="stylesheet">

    <!-- TABELA -->
    <link href="/css/bootstrap/tabela/dataTables.bootstrap4.min.css" rel="stylesheet">

    <link href="/css/estilo.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Menu da Page -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Sistema<sup></sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="/">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Serviços
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">                    
                    <i class="fa-solid fa-user-tie"></i>
                    <span>Funcionarios</span>
                </a> 
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-transparent py-2 collapse-inner rounded">
                        <a class="collapse-item" href="{{route('funcionario.create')}}">Cadastro</a>
                        <a class="collapse-item" href="{{route('funcionario.gerenciar')}}">Gerenciar</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fa-solid fa-network-wired"></i>
                    <span>Setores</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-transparent py-2 collapse-inner rounded">
                        <a class="collapse-item" href="{{route('setor.create')}}">Cadastro</a>
                        <a class="collapse-item" href="{{route('setor.gerenciar')}}">Gerenciar</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fa-solid fa-diagram-project"></i>
                    <span>Cargos</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-transparent py-2 collapse-inner rounded">
                        <a class="collapse-item" href="{{route('cargo.create')}}">Cadastro</a>
                        <a class="collapse-item" href="{{route('cargo.gerenciar')}}">Gerenciar</a> 
                    </div>
                </div>
            </li>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUser"
                    aria-expanded="true" aria-controls="collapseUser">
                    <i class="fa-solid fa-user-gear"></i>
                    <span>Usuarios</span>
                </a>
                <div id="collapseUser" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-transparent py-2 collapse-inner rounded">
                        <a class="collapse-item" href="{{route('user.create')}}">Cadastro</a>
                        <a class="collapse-item" href="{{route('user.gerenciar')}}">Gerenciar</a> 
                    </div>
                </div>
            </li>

             <!-- Divider -->
             <hr class="sidebar-divider">

             <!-- Heading -->
             <div class="sidebar-heading">
                 Resumos
             </div>


            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="tables.html">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Relatorio</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

            <!-- Sidebar Message -->
            <div class="sidebar-card d-none d-lg-flex">
                <img class="sidebar-card-illustration mb-2" src="/img/undraw_rocket.svg" alt="...">
                
                <a class="btn btn-success btn-sm" href="https://startbootstrap.com/theme/sb-admin-pro">Suba de nivel</a>
            </div>

        </ul>
        <!-- Fim do Menu da Page -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- TOP DA PAGE -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Navbar --> 
                    <ul class="navbar-nav ml-auto">

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                                @auth
                                    {{ auth()->user()->name }}
                                @endauth
                                </span>
                                <img class="img-profile rounded-circle"
                                    src="/img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Perfil
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Configurações
                                </a>
                                <div class="dropdown-divider"></div>

                                <form action="/logout" method="POST">
                                    @csrf
                                    <a class="dropdown-item" href="/logout" class="nav-link" onclick="event.preventDefault(); 
                                        this.closest('form').submit();">
                                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Deslogar 
                                    </a>
                                </form> 

                                
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- FIM DO TOP DA PAGE -->

                <!-- Inicio do conteudo da page -->
                <main>
                    <div class="container-fluid">                                             
                        <div class="row">   
                            
                            <div class="container">                                                                
                                @if(session('msg'))  {{-- VERIFICA SE EXISTE MSG NA SESSÃO --}}
                                    <div class="alert alert-success" id="success-alert" role="alert">
                                        <button type="button" class="close" data-dismiss="alert">x</button>
                                        {{ session('msg')}}
                                    </div>
                                @endif  
                            </div>

                            @yield('content') {{-- CONTEUDO DAS PAGINAS --}}
                        </div>
                    </div>
                </main>
                
                <!-- Fim do conteudo da page -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; 2022</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- Fim Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- FUNCOES JS MANUAL -->
    <script type="text/javascript" src="/js/funcoes.js"></script>

    <!-- Bootstrap core JavaScript-->
    <script src="/css/bootstrap/jquery.min.js"></script>
    <script src="/css/bootstrap/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="/css/bootstrap/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="/css/bootstrap/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="/css/bootstrap/tabela/jquery.dataTables.min.js"></script>
    <script src="/css/bootstrap/tabela/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="/css/bootstrap/tabela/datatables-demo.js"></script>

</body>

</html>