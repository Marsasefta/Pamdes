<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>@yield('title')</title>

    <!-- Custom fonts for this template-->
    <link href="{{ asset('template/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap5.min.css">
    <!-- Custom styles for this template-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="{{ asset('template/css/sb-admin-2.min.css') }}" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <style>
      body{
        font-family: 'Poppins', sans-serif;
      }
      .dashboard-banner{
        background-image: url('https://p4.wallpaperbetter.com/wallpaper/1017/157/258/the-sky-sea-day-the-ship-wallpaper-preview.jpg');
        background-position: center;
        background-size: cover;
        background-repeat: no-repeat;
        height: 500px;
      }
    </style>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php $cek = Auth::user()->role; ?>
            @if($cek === 'administrator')
                <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion text-white" id="accordionSidebar">

                    <!-- Sidebar - Brand -->
                    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                        <div class="sidebar-brand-text mx-3">ADMIN PAMDES</sup></div>
                    </a>

                    <!-- Divider -->
                    <hr class="sidebar-divider my-0">

                    <!-- Nav Item - Dashboard -->
                    <li class="nav-item">
                        <a class="nav-link" href="dashboard">
                            <i class="fas fa-fw fa-tachometer-alt"></i>
                            <span>Dashboard Tagihan</span></a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                            aria-expanded="true" aria-controls="collapsePages">
                            <i class="fas fa-fw fa-folder"></i>
                            <span>Data</span>
                        </a>
                        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                            <div class="bg-white py-2 collapse-inner rounded">
                                <h6 class="collapse-header">Data Master:</h6>
                                <a class="collapse-item" href="datacustomer">Data Pelanggan PDAM</a>
                                <a class="collapse-item" href="dataadmin">Admin Pengguna</a>
                                {{-- <a class="collapse-item" href="forgot-password.html">Forgot Password</a> --}}
                                <div class="collapse-divider"></div>
                            </div>
                        </div>
                    </li>
                    {{-- <li class="nav-item">
                        <a class="nav-link" href="datacustomer">
                            <i class="fas fa-fw fa-users"></i>
                            <span>Pelanggan</span></a>
                    </li> --}}
                    <li class="nav-item">
                        <a class="nav-link" href="rekap">
                            <i class="fas fa-fw fa-book"></i>
                            <span>Rekap Data</span></a>
                    </li>
                    <!-- Sidebar Toggler (Sidebar) -->
                    <div class="text-center d-none d-md-inline mt-1">
                    <button class="rounded-circle border-0" id="sidebarToggle"></button>
                    </div>

                </ul>
            @endif

            @if($cek === 'Kepala')
                <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion text-white" id="accordionSidebar">

                    <!-- Sidebar - Brand -->
                    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                        <div class="sidebar-brand-text mx-3">ADMIN PAMDES</sup></div>
                    </a>

                    <!-- Divider -->
                    <hr class="sidebar-divider my-0">

                    <!-- Nav Item - Dashboard -->
                    <li class="nav-item">
                        <a class="nav-link" href="dashboard">
                            <i class="fas fa-fw fa-tachometer-alt"></i>
                            <span>Dashboard Tagihan</span></a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                            aria-expanded="true" aria-controls="collapsePages">
                            <i class="fas fa-fw fa-folder"></i>
                            <span>Data</span>
                        </a>
                        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                            <div class="bg-white py-2 collapse-inner rounded">
                                <h6 class="collapse-header">Data Master:</h6>
                                <a class="collapse-item" href="datacustomer">Data Pelanggan PDAM</a>
                                {{-- <a class="collapse-item" href="dataadmin">Admin Pengguna</a> --}}
                                {{-- <a class="collapse-item" href="forgot-password.html">Forgot Password</a> --}}
                                <div class="collapse-divider"></div>
                            </div>
                        </div>
                    </li>
                    {{-- <li class="nav-item">
                        <a class="nav-link" href="datacustomer">
                            <i class="fas fa-fw fa-users"></i>
                            <span>Pelanggan</span></a>
                    </li> --}}
                    <li class="nav-item">
                        <a class="nav-link" href="rekap">
                            <i class="fas fa-fw fa-book"></i>
                            <span>Rekap Data</span></a>
                    </li>
                    <!-- Sidebar Toggler (Sidebar) -->
                    <div class="text-center d-none d-md-inline mt-1">
                    <button class="rounded-circle border-0" id="sidebarToggle"></button>
                    </div>

                </ul>
            @endif

            @if($cek === 'Staff')
                <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion text-white" id="accordionSidebar">

                    <!-- Sidebar - Brand -->
                    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                        <div class="sidebar-brand-text mx-3">ADMIN PAMDES</sup></div>
                    </a>

                    <!-- Divider -->
                    <hr class="sidebar-divider my-0">

                    <!-- Nav Item - Dashboard -->
                    <li class="nav-item">
                        <a class="nav-link" href="dashboard">
                            <i class="fas fa-fw fa-tachometer-alt"></i>
                            <span>Dashboard Tagihan</span></a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                            aria-expanded="true" aria-controls="collapsePages">
                            <i class="fas fa-fw fa-folder"></i>
                            <span>Data</span>
                        </a>
                        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                            <div class="bg-white py-2 collapse-inner rounded">
                                <h6 class="collapse-header">Data Master:</h6>
                                <a class="collapse-item" href="datacustomer">Data Pelanggan PDAM</a>
                                {{-- <a class="collapse-item" href="dataadmin">Admin Pengguna</a> --}}
                                {{-- <a class="collapse-item" href="forgot-password.html">Forgot Password</a> --}}
                                <div class="collapse-divider"></div>
                            </div>
                        </div>
                    </li>
                    {{-- <li class="nav-item">
                        <a class="nav-link" href="datacustomer">
                            <i class="fas fa-fw fa-users"></i>
                            <span>Pelanggan</span></a>
                    </li> --}}
                    <li class="nav-item">
                        <a class="nav-link" href="rekap">
                            <i class="fas fa-fw fa-book"></i>
                            <span>Rekap Data</span></a>
                    </li>
                    <!-- Sidebar Toggler (Sidebar) -->
                    <div class="text-center d-none d-md-inline mt-1">
                    <button class="rounded-circle border-0" id="sidebarToggle"></button>
                    </div>

                </ul>
            @endif
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    {{-- <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form> --}}

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

                        <a href="#" id="userDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="mr-2 d-none d-lg-inline text-gray-600 small"></span>
                        </a>
                        <div class="topbar-divider d-none d-sm-block">
                            
                        </div>
                        
                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Hi, {{ auth()->user()->name }} <i class="fa fa-bars"></i></span>
                                {{-- <img class="img-profile rounded-circle" src="img/undraw_profile.svg"> --}}
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">@yield('title')</h1>
                    </div>
                    @yield('content')
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>UMY 2022</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('template/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('template/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('template/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('template/js/sb-admin-2.min.js') }}"></script>

    <!-- Page level plugins -->
    <script src="{{ asset('template/vendor/chart.js/Chart.min.js') }}"></script>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap5.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script>
      $(document).ready(function() {
        $('#table').DataTable();
      } );
    </script>

</body>

</html>