@extends('layouts.dashboard')
{{-- @section('title')
    Barang Export
@endsection --}}
@section('content')
    <div class="row">
        <div class="col">
            <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Tambah Data
            </button>
            @include('modal.add_data_modal')
        </div>
    </div>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Tagihan Customer</h6>
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
                            <th>Tanggal</th>
                            <th>Aksi</th>
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
                                {{ $post->Jumlah}}
                            </td>
                            <td>
                                {{ $post->tanggal}}
                            </td>
                            
                            <td>
                                <div class="row">
                                    {{-- <div class="col">
                                        <a class="btn btn-success btn-block" data-bs-toggle="modal">
                                            <i class="far fa-eye"></i>
                                        </a>
                                    </div> --}}
                                
                                    <div class="col">
                                        <form action="{{ route('detailuser',  $post->id) }}">
                                        
                                            <button type="submit" class="btn btn-success" style="width: 50px" >
                                                <i class="fa fa-print"></i>
                                            </button>
                                        </form>
                                    </div>
                                    <div class="col">
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
                            </td>
                        </tr>
                        @include('modal.edit_modal')
                        @empty
                        {{-- <tr class="text-center">
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