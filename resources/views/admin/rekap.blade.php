@extends('layouts.dashboard')
{{-- @section('title')
    Barang Export
@endsection --}}
@section('content')
    {{-- <div class="row">
        <div class="col">
            <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Tambah Data
            </button>
            @include('modal.add_data_modal')
        </div>
    </div> --}}
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Rekap Tagihan Bulanan Customer</h6>
            
        </div>
        
        <div class="card-body">
            <form action="{{ route('rekap') }}" method="GET" class="form-group" id="formFilter">
                {{ csrf_field() }}
                <div class="row">
              
                    <div class="col-md-4">
                        {{-- <label>Pilih Bulan</label> --}}                       
                            <input type="date" class="form-control" name="start_date">
                    </div>
                    <div class="col-md-4">
                        {{-- <label for="">Pilih Tahun</label> --}}   
                        <input type="date" class="form-control" name="end_date">   
                    </div>
                    
                    <div class="col">
                       
                        <button class="btn btn-info" type="submit" >Cari Data</button>
                    </div>
                </div>
            </form>
            
            
            
            <div class="table-responsive">
                
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
                        @forelse ($rekaps as $rekap)
                        <tr>
                            <td>
                                {{ $rekap->Rekening}}
                            </td>
                            <td>
                                {{ $rekap->Nama}}
                            </td>
                            <td>
                                {{ $rekap->Jumlah}}
                            </td>
                            <td>
                                {{ $rekap->tanggal}}
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
        </div>
    </div>
@endsection

       