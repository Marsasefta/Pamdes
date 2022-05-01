<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Pelanggan;

class TabelUntukPelanggan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pelanggans', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('Rekening');
            $table->string('Nama');
            $table->string('Alamat');
            $table->date('tanggal');
            $table->string('Biaya');
            $table->string('Administrasi');
            $table->string('Pemeliharaan');
            $table->string('Denda');
            $table->string('Jumlah');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pelanggans');
    }
}
