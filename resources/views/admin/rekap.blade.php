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
            <div class="row">
              
                <div class="col-md-4">
                    {{-- <label>Pilih Bulan</label> --}}
                    <select style="cursor:pointer;margin-bottom:1.5em;" class="form-control" id="tag_select" name="month">
                        <option value="0" selected disabled> Pilih Bulan</option>
                        <option value="01">Januari</option>
                        <option value="02">Februari</option>
                        <option value="03">Maret</option>
                        <option value="04">April</option>
                        <option value="05">Mei</option>
                        <option value="06">Juni</option>
                        <option value="07">Juli</option>
                        <option value="08">Agustus</option>
                        <option value="09">September</option>
                        <option value="10">Oktober</option>
                        <option value="11">November</option>
                        <option value="12">Desember</option>
                    </select>
                </div>
                <div class="col-md-4">
                    {{-- <label for="">Pilih Tahun</label> --}}
                    <select name="" id="" class="form-control">
                        <option value="0" selected disabled> Pilih Tahun</option>
                        <option value="">2021</option>
                        <option value="">2022</option>
                        <option value="">2023</option>
                    </select>
                </div>
                
                <div class="col">
                    <label for=""></label>
                    <button class="btn btn-info">Cari Data</button>
                </div>
            </div>
            
            
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
                        {{-- @forelse ($posts as $post) --}}
                        <tr>
                            <td>
                                {{-- {{ $post->Rekening}} --}}
                            </td>
                            <td>
                                {{-- {{ $post->Nama}} --}}
                            </td>
                            <td>
                                {{-- {{ $post->Jumlah}} --}}
                            </td>
                            <td>
                                {{-- {{ $post->tanggal}} --}}
                            </td>
                            
                            {{-- <td>
                                <div class="row"> --}}
                                    {{-- <div class="col">
                                        <a class="btn btn-success btn-block" data-bs-toggle="modal">
                                            <i class="far fa-eye"></i>
                                        </a>
                                    </div> --}}
                                    {{-- <div class="col">
                                        <a class="btn btn-warning btn-block" data-bs-toggle="modal" data-bs-target="#editModal{{ $post->id }}">
                                            <i class="far fa-edit"></i>
                                        </a>
                                    </div>
                                    <div class="col">
                                        <form method="POST" onsubmit="return confirm('Apakah Anda Yakin Akan Menghapus Data?')" action="{{ route('deletepost',  $post->id) }}" >
                                            
                                            @csrf 
                                            @method('delete') 
                                            <button type="submit"  class="btn btn-danger btn-block"><i class="far fa-trash-alt"></i></button>
                                        </form>
                                    </div>
                                </div>
                            </td> --}}
                        </tr>
                        {{-- @include('modal.edit_modal') --}}
                        {{-- @empty --}}
                        {{-- <tr class="text-center">
                            <td colspan="6">
                                Belum Ada Data
                            </td>
                        </tr> --}}
                        {{-- @endforelse --}}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection