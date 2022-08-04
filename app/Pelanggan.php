<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\User;


class Pelanggan extends Model
{
    protected $fillable = ['Rekening','iduser','tanggal','Alamat','Biaya','Administrasi','Pemeliharaan','Denda','Jumlah','status'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
