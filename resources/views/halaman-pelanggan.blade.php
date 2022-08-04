

<!DOCTYPE html>



<html lang="en">

    

    <head>

        <meta charset="utf-8" />

        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

        <meta name="description" content="" />

        <meta name="author" content="" />

        <title>SIPAMDES SENDANGSARI</title>
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />

        <!-- Bootstrap icons-->

        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" type="text/css" />

        <!-- Google fonts-->

        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css" />

        <!-- Core theme CSS (includes Bootstrap)-->

        <link href="css/styles.css" rel="stylesheet" />

    </head>

    <body>

        <!-- Navigation-->
       

        <!-- Masthead-->
        <nav class="navbar navbar-expand-lg navbar-light" id="mainNav">
            <div class="container px-4 px-lg-5">
                <img src="https://4.bp.blogspot.com/-9smovTIsKaU/Wf_kf1SQI_I/AAAAAAAAEgQ/u6lInUv2X3QNeE3Xnga-1drQkPs-u3xNgCLcBGAs/s1600/PDAM.jpg"  style="width:100px;height:90px;" alt="">
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto py-4 py-lg-0">
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" >Hi, {{ auth()->user()->name }}</a></li>
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="#content">Lihat Tagihan</a></li>
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="#rules">Kebijakan</a></li>
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="#about">Tentang Kami</a></li>
                        <li class="nav-item">
                            
                            <a class="dropdown-item nav-link px-lg-3 py-3 py-lg-4" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </a>
                        </li>
                        {{-- <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4"  href="{{ route('logout') }}">Logout</a></li> --}}
                    </ul>
                </div>
            </div>
        </nav>
        <header class="masthead">
           
            <div class="container position-relative">

                <div class="row justify-content-center">
                    
                    <div class="col-xl-8">

                        <div class="text-center text-white">

                            <!-- Page heading-->

                            <h1 class="mb-6">SELAMAT DATANG DI SISTEM INFORMASI MANAJEMEN PAMDES SENDANGSARI, MINGGIR, SLEMAN</h1>

                        </div>

                    </div>

                </div>

            </div>

        </header>



        <section class="content" id="content">

            <div class="card shadow mb-4">

                <div class="card-header py-3 text-center">

                    <h6 class="m-0 font-weight-bold text-primary text-center">Daftar Tagihan Bulanan PDAM Sendangsari, Minggir, Sleman</h6>

                </div>

                <div class="card-body">

                    <div class="table-responsive">

                        <table class="table table-bordered" id="table" width="100%" cellspacing="0">

                            <thead>

                                <tr>

                                    <th>No</th>
                                    <th>Nomor Rekening</th>
                                    <th>Nama Pelanggan</th>
                                    <th>Alamat</th>
                                    <th>Tanggal Tagihan</th>
                                    <th>Biaya Pemakaian</th>
                                    <th>Administrasi</th>
                                    <th>Pemeliharaan</th>
                                    <th>Denda</th>
                                    <th>Jumlah</th>
                                    <th>Status</th>

                                </tr>

                            </thead>

                            <tbody>

                                @php

                                $no=1

                                @endphp

                                @forelse ($posts as $post)

                                <tr>

                                    <td>{{$no++}}</td>
                                    <td>
                                        {{ $post->Rekening}}
                                    </td>
                                    <td>
                                        {{ $post->Nama}}
                                    </td>
                                    <td>
                                        {{ $post->Alamat}}
                                    </td>
                                    <td>
                                        {{ $post->tanggal}}
                                    </td>
                                    <td>
                                        {{ $post->Biaya}}
                                    </td>
                                    <td>
                                        {{ $post->Administrasi}}
                                    </td>
                                    <td>
                                        {{ $post->Pemeliharaan}}
                                    </td>
                                    <td>
                                        {{ $post->Denda}}
                                    </td>
                                    <td>
                                        {{ $post->Jumlah}}
                                    </td>
                                    <td>
                                        {{ $post->status}}
                                    </td>

                                </tr> 

                                @empty

                                @endforelse

                            </tbody>

                        </table>

                    </div>

                </div>

            </div>

        </section>

        <section class="features-icons bg-light text-center" id="rules"> 
            <h2>Kebijakan</h2>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                            <div class="features-icons-icon d-flex"><i class="bi bi-calendar-event m-auto text-primary"></i></div>
                            <h3>Maksimal Pembayaran</h3>
                            <p class="lead mb-0">Harap bayar tagihan anda tepat waktu sebelum tanggal 20 disetiap bulannya!</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                            <div class="features-icons-icon d-flex"><i class="bi bi-cash-coin m-auto text-primary"></i></div>
                            <h3>Denda</h3>
                            <p class="lead mb-0">Pembayaran yang melebihi tanggal 20 akan mendapatkan denda!</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="features-icons bg-secondary text-center" id="about">
            <h2>Tentang Kami</h2>
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5">
                    <div class="col-md-4 mb-3 mb-md-0">
                        <div class="card py-4 h-100">
                            <div class="card-body text-center">
                                <i class="fas fa-map-marked-alt text-primary mb-2"></i>
                                <h4 class="text-uppercase m-0">Alamat</h4>
                                <hr class="my-4 mx-auto" />
                                <div class="small text-black-50">Balai Desa Sendangsari , Kecamatan Minggir , Kabupaten Sleman</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3 mb-md-0">
                        <div class="card py-4 h-100">
                            <div class="card-body text-center">
                                <i class="fas fa-envelope text-primary mb-2"></i>
                                <h4 class="text-uppercase m-0">Email</h4>
                                <hr class="my-4 mx-auto" />
                                <div class="small text-black-50">Pamdessendangsari@gmail.com</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3 mb-md-0">
                        <div class="card py-4 h-100">
                            <div class="card-body text-center">
                                <i class="fas fa-mobile-alt text-primary mb-2"></i>
                                <h4 class="text-uppercase m-0">Telephone</h4>
                                <hr class="my-4 mx-auto" />
                                <div class="small text-black-50">08123456678</div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </section>
        <footer class="footer bg-secondary small text-center text-white-50">
            <div class="container px-4 px-lg-5"> &copy;2022 Sistem Informasi PDAM Desa Sendangsari, Kecamatan Minggir</div>
        </footer>
        <!-- Footer-->

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

        <script src="{{ asset('template/vendor/jquery/jquery.min.js') }}"></script>

        <script src="{{ asset('template/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

        <script src="{{ asset('template/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
     
        <script src="js/scripts.js"></script>
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
        <script src="{{ asset('template/js/sb-admin-2.min.js') }}"></script>

    

        <!-- Core theme JS-->

        <script src="js/scripts.js"></script>

        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>

        <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>

        <script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap5.min.js"></script>

    

        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>

        <script>

            $(document).ready(function() {

              $('#table').DataTable();

            } );

          </script>

    </body>

   

</html>

