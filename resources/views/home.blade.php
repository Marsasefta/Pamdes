

<!DOCTYPE html>



<html lang="en">

    

    <head>

        <meta charset="utf-8" />

        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

        <meta name="description" content="" />

        <meta name="author" content="" />

        <title>SIPAMDES SENDANGSARI</title>

        <!-- Favicon-->

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

        <nav class="navbar navbar-light bg-light static-top">

            <div class="container">

                <img src="https://4.bp.blogspot.com/-9smovTIsKaU/Wf_kf1SQI_I/AAAAAAAAEgQ/u6lInUv2X3QNeE3Xnga-1drQkPs-u3xNgCLcBGAs/s1600/PDAM.jpg"  style="width:100px;height:90px;" alt="">

                <a class="btn btn-primary bi bi-people"  href="login" style="width:150px;height:50px;" Login Admin> Login Admin</a>

            </div>

        </nav>

        <!-- Masthead-->

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

                                    <th>Jumlah Tagihan</th>

                                    <th>Tanggal Tagihan</th>


                                </tr>

                            </thead>

                            <tbody>

                                @php

                                $no=1

                                @endphp

                                @forelse ($datas as $data)

                                <tr>

                                    <td>{{$no++}}</td>

                                    <td>

                                        {{ $data->Rekening}}

                                    </td>

                                    <td>

                                        {{ $data->Nama}}

                                    </td>

                                    <td>

                                       {{ $data->Jumlah}}

                                    </td> 

                                    <td>

                                        {{ $data->tanggal}}

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

        <footer class="bg-light text-center text-lg-start">

            <!-- Grid container -->

            <div class="container p-4">

              <!--Grid row-->

              <div class="row">

                <!--Grid column-->

                <div class="text-center">

                  <h5 class="text-uppercase">TENTANG KAMI</h5>

          

                  <p>

                   Alamat :

                  </p>

                  <p>

                      Balai Desa Sendangsari, Kec.Minggir, Kab. Sleman

                  </p>

                  <p>

                      Telephone :

                  </p>

                  <p>

                      08123456678

                  </p>

                </div>

                <!--Grid column-->

          

                <!--Grid column-->

                

                <!--Grid column-->

              </div>

              <!--Grid row-->

            </div>

            <!-- Grid container -->

          

            <!-- Copyright -->

            <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">

              © 2020 Copyright: PDAM SENDANGSARI, MINGGIR, SLEMAN

              

            </div>

            <!-- Copyright -->

          </footer>

        <!-- Footer-->

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

        <script src="{{ asset('template/vendor/jquery/jquery.min.js') }}"></script>

        <script src="{{ asset('template/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

        <script src="{{ asset('template/vendor/jquery-easing/jquery.easing.min.js') }}"></script>



        <!-- Custom scripts for all pages-->

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

