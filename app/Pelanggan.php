<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Pelanggan extends Model
{
    protected $fillable = ['Rekening', 'Nama', 'Jumlah','tanggal'];
}
