<!DOCTYPE html>
<html lang="pt-pt">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('site/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/index.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('dashboard/css/dash2.css') }}" rel="stylesheet">
    <link href="{{ asset('bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    @yield('css')
    <title>@yield('titulo')</title>
</head>

<body id="page-top">
    <div id="wrapper">
        <!-- ============================================== Side Bar ==================================================== -->
        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('admin') }}">
                <div class="sidebar-brand-icon">
                    <i class="bi bi-house-door"></i>
                </div>
                <div class="sidebar-brand-text mx-4">VERDANT</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.html">
                    <i class="bi bi-speedometer2"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">
            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                @if (Gate::allows('AcessoAdmin'))
                    <a class="nav-link " href="{{ route('utilizador') }}" data-target="#collapseTwo"
                        aria-expanded="true" aria-controls="collapseTwo">
                        <i class="bi bi-person-circle"></i>
                        <span>Utilizadores</span>
                    </a>
                    <a class="nav-link" href="{{ route('cliente') }}" data-target="#collapseTwo" aria-expanded="true"
                        aria-controls="collapseTwo">
                        <i class="bi bi-person"></i>
                        <span>Cliente</span>
                    </a>
                    <a class="nav-link " href="{{ route('viatura') }}" data-target="#collapseTwo" aria-expanded="true"
                        aria-controls="collapseTwo">
                        <i class="bi bi-truck"></i>
                        <span>Viatura</span>
                    </a>
                    <a class="nav-link " href="{{ route('vaga') }}" data-target="#collapseTwo" aria-expanded="true"
                        aria-controls="collapseTwo">
                        <i class="bi bi-slash-circle"></i>
                        <span>Vaga</span>
                    </a>
                    <a class="nav-link " href="{{ route('modelo') }}" data-target="#collapseTwo" aria-expanded="true"
                        aria-controls="collapseTwo">
                        <i class="fas fa-fw fa-cog">M</i>
                        <span>Modelos de viatura</span>
                    </a>
                    <a class="nav-link " href="{{ route('tipo') }}" data-target="#collapseTwo" aria-expanded="true"
                        aria-controls="collapseTwo">
                        <i class="fas fa-fw fa-cog">T</i>
                        <span>Tipos de viatura</span>
                    </a>
                    <a class="nav-link " href="{{ route('fabricante') }}" data-target="#collapseTwo"
                        aria-expanded="true" aria-controls="collapseTwo">
                        <i>F</i>
                        <span>Fabricante</span>
                    </a>
                    <a class="nav-link " href="{{ route('cor') }}" data-target="#collapseTwo" aria-expanded="true"
                        aria-controls="collapseTwo">
                        <i class="bi bi-palette"></i>
                        <span>Cores de viatura</span>
                    </a>
                @endif
                <a class="nav-link " href="{{ route('parqueamento') }}" data-target="#collapseTwo" aria-expanded="true"
                    aria-controls="collapseTwo">
                    <i class="bi bi-file-ppt"></i>
                    <span>Parqueamento</span>
                </a>
                <a class="nav-link " href="{{route('levantamento')}}" data-target="#collapseTwo" aria-expanded="true"
                    aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog">L</i>
                    <span>Levantamento</span>
                </a>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->
        <!-- ============================================== End Side Bar ============================================== -->


        <!-- Topbar -->
        <!-- ================================== Top bar =================================== -->
        <div id="content-wrapper" class="d-flex flex-column">

            <div id="content">

                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="bi bi-search"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <a class="btn btn-primary" href="{{ route('logout') }}">
                            Logout
                        </a>
                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span
                                    class="mr-2 d-none d-lg-inline text-gray-600 small">{{ session('user')->Nome }}</span>
                                <img class="img-profile rounded-circle" src="{{ asset('assets/undraw_profile.svg') }}">
                            </a>
                        </li>

                    </ul>
                </nav>
                @if (session('mensagem'))
                <div class="alert alert-success alert-dismissible fade show ml-4 me-4" role="alert">
                    {{session('mensagem')}}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
                @endif
                @yield('conteudo')
            </div>

        </div>
    </div>




    <script src="{{ asset('site/jquery.js') }}"></script>
    <script src="{{ asset('site/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('js/jquery.tabledit.js') }}"></script>
    <script src="{{ asset('js/dataTables.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('site/bootstrap.js') }}"></script>
    <script src="{{ asset('dashboard/js/dash2.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('.table').DataTable();
        })
    </script>
    @stack('javascript')
    <!-- Core plugin JavaScript
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>-->

    <!-- Custom scripts for all pages-->

    <!-- Page level plugins
    <script src="vendor/chart.js/Chart.min.js"></script>-->

    <!-- Page level custom scripts
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>-->


</body>

</html>
