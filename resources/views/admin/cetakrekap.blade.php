{{-- @extends('layouts.dashboard') --}}
{{-- @section('title')
    Barang Export
@endsection --}}
{{-- @section('content') --}}
    {{-- <div class="row">
        <div class="col">
            <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Tambah Data
            </button>
            @include('modal.add_data_modal')
        </div>
    </div> --}}
     
        {{-- <div class="card-body">
            <form window method="GET" class="form-group" id="formFilter">
                {{ csrf_field() }}
                <div class="row">
                    <h5>Filter Data Bulanan</h5>
                    <div class="col-md-4">
                             Mulai Tanggal                 
                            <input type="date" class="form-control" name="start_date">
                    </div>
                    <div class="col-md-4">
                          Hingga Tanggal
                        <input type="date" class="form-control" name="end_date">   
                    </div>
                    
                </div>
            </form>
            
            
            
            
        </div> --}}
   
{{-- @endsection --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body onload="window.print()">
    <div class="table-responsive" id="tabledownload">

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Rekap Tagihan Bulanan Customer</h6>
                
            </div>
        </div>
                
        <table class="table table-bordered" id="table" width="100%" cellspacing="0">
            
            <thead>
                
                <tr>
                    <th>Nomor Rekening</th>
                    <th>Nama Pelanggan</th>
                    <th>Jumlah Tagihan</th>
                    <th>Tanggal</th>
                    {{-- <th>Aksi</th> --}}
                </tr>
            </thead>
            <tbody>
                @forelse ($prints as $print)
                <tr>
                    <td>
                        {{ $print->Rekening}}
                    </td>
                    <td>
                        {{ $print->Nama}}
                    </td>
                    <td>
                        {{ $print->Jumlah}}
                    </td>
                    <td>
                        {{ $print->tanggal}}
                    </td>
                </tr>
                {{-- @include('modal.edit_modal') --}}
                @empty
                {{-- {{-- <tr class="text-center">
                    <td colspan="6">
                        Belum Ada Data
                    </td>
                </tr> --}}
                @endforelse
            </tbody>
        </table>
    </div>
</body>
</html>