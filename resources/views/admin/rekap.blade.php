@extends('layouts.dashboard')

@section('content')

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Rekap Tagihan Bulanan Customer</h6>
            
        </div>
        
        <div class="card-body">
            <form action="{{ route('rekap') }}" method="GET" class="noprint form-group" id="formFilter">
                {{ csrf_field() }}
                <div class="row">
                    <h5>Filter Data Bulanan</h5>
                    <div class="col-md-4 form-inline" >               
                        Mulai Tanggal <input type="date" class="form-control" name="start_date" id="start_date">
                    </div>
                    <div class="col-md-4 form-inline" >  
                        Hingga Tanggal <input type="date" class="form-control" name="end_date" id="end_date">   
                    </div>
                    <div class="col">
                        <button class="btn btn-info" type="submit" >Cari Data</button>

                        <a  onclick="this.href='/cetakrekap/'+ document.getElementById('start_date').value + '/' + document.getElementById('end_date').value" class="btn btn-success"  type="submit" >
                            
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-printer" viewBox="0 0 16 16">
                                <path d="M2.5 8a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1z"></path>
                                <path d="M5 1a2 2 0 0 0-2 2v2H2a2 2 0 0 0-2 2v3a2 2 0 0 0 2 2h1v1a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2v-1h1a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2h-1V3a2 2 0 0 0-2-2H5zM4 3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1v2H4V3zm1 5a2 2 0 0 0-2 2v1H2a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-1v-1a2 2 0 0 0-2-2H5zm7 2v3a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1z"></path>
                              </svg>
                              Cetak Rekap Tagihan
                        </a>
                        
                    </div>
                    
                </div>
            </form>
            
            
            
            <div class="table-responsive">
                
                <table class="table table-bordered" id="table" width="100%" cellspacing="0">
                    
                    <thead>
                        
                        <tr>
                            <th>No</th>
                            <th>Nomor Rekening</th>
                            <th>Nama Pelanggan</th>
                            <th>Alamat</th>
                            <th>Tanggal</th>
                            <th>Biaya Pemakaian</th>
                            <th>Administrasi</th>
                            <th>Pemeliharaan</th>
                            <th>Denda</th>
                            <th>Jumlah</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $no=1
                        @endphp
                        @forelse ($rekaps as $rekap)
                        <tr>
                            <td>{{$no++}}</td>
                            <td>
                                {{ $rekap->Rekening}}
                            </td>
                            <td>
                                {{ $rekap->Nama}}
                            </td>
                            <td>
                                {{ $rekap->Alamat}}
                            </td>
                            <td>
                                {{ $rekap->tanggal}}
                            </td>
                            <td>
                                {{ $rekap->Biaya}}
                            </td>
                            <td>
                                {{ $rekap->Administrasi}}
                            </td>
                            <td>
                                {{ $rekap->Pemeliharaan}}
                            </td>
                            <td>
                                {{ $rekap->Denda}}
                            </td>
                            <td>
                                {{ $rekap->Jumlah}}
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

       