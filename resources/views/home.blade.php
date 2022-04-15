@extends('layouts.app')

@section('content')
<html>
    <head>
        <title></title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    </head>
    <body>
        {{-- <div class="row">
            <div class="col-md-6 align-center text-white jumbotron-image shadow " style="background-image: url(https://www.hdwallpapersfreedownload.com/uploads/large/special-days/world-water-day-desktop-save-water-h2o-hd.jpg); height:100%;" >
            
                
                    <h1 data-aos="fade-up" class="header">SELAMAT DATANG DI SISTEM INFORMASI MANAJEMEN PAMDES</h1>
                    <p data-aos="fade-up" class="lead">Masukkan Nomor rekening untuk melihat tagihan</p>
                    <form class="form-inline">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                      </form>
                
            </div>
        </div> --}}
       <header id="header" class="d-flex align-items-center-flex-"> <div class="container d-flex flex-column align-items-center">

        <h1>Selamat Datang</h1>
        <h2>DI SISTEM INFORMASI MANAJEMEN PAMDES</h2>
    </header>
    <div class="row">
        <div class="col-md-4">
            <div class="container p-3 my-3 border">
                <div class="">
                    <h6>Masukkan Nomor rekening untuk melihat tagihan</h6>
                    <form class="form-inline">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                    </form>
                    
                </div>
            
            </div>
        </div>
        <div class="col-md-8">
            <div class="container p-3 my-3 border"></div>
        </div>
    </div>
    


       
    </body>
</html>


@endsection



