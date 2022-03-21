<?php

namespace App;
use Illuminate\Database\Migrations\Migration;

use Illuminate\Database\Eloquent\Model;

class datacustomer extends Model
{
    protected $fillable = ['nama', 'rekening', 'alamat', 'gender', 'rt', 'rw'];
}
