<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Pelanggan extends Model
{
    protected $fillable = ['Rekening', 'Nama','tanggal','Alamat','Biaya','Administrasi','Pemeliharaan','Denda','Jumlah'];
}
