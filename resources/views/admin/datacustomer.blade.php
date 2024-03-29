@extends('layouts.dashboard')
{{-- @section('title')
    Barang Export
@endsection --}}
@section('content')
    <div class="row">
        <div class="col">
            <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Tambah Customer
            </button>
            @include('modal.add_customer')
        </div>
    </div>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Pelanggan</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="table" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Rekening</th>
                            <th>Jenis Kelamin</th>
                            <th>Alamat</th>
                            <th>RT</th>
                            <th>RW</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $no=1
                        @endphp
                        @forelse ($customers as $customer)
                        <tr>
                            <td>
                                {{$no++}}
                            </td>
                            <td>
                                {{ $customer->nama}}
                            </td>
                            <td>
                                {{ $customer->rekening}}
                            </td>
                            <td>
                                {{ $customer->alamat}}
                            </td>
                            <td>
                                {{ $customer->gender}}
                            </td>
                            <td>
                                {{ $customer->rt}}
                            </td>
                            <td>
                                {{ $customer->rw}}
                            </td>
                            <td>
                                <div class="row">
                                    <div class="col">
                                        <a class="btn btn-warning btn-block" data-bs-toggle="modal" data-bs-target="#editpelangganModal{{ $customer->id }}">
                                            <i class="far fa-edit"></i>
                                        </a>
                                    </div>
                                    <div class="col">
                                        <form method="POST" onsubmit="return confirm('Apakah Anda Yakin Akan Menghapus Data?')" action="{{ route('delete',  $customer->id) }}">
                                            
                                            @csrf 
                                            @method('delete') 
                                            <button type="submit"  class="btn btn-danger btn-block"><i class="far fa-trash-alt"></i></button>
                                        </form>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        @include('modal.editpelanggan_modal')
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection