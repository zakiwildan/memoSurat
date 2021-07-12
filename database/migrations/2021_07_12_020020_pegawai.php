<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Pegawai extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pegawai', function (Blueprint $table) {
            $table->string('nip', 100)->unique();
            $table->string('nm_pegawai', 100);
            $table->string('jk', 50);
            $table->string('tempat', 100);
            $table->date('tgl_lahir');
            $table->string('agama', 100);
            $table->string('alamat', 200);
            $table->string('no_telp', 100);
            $table->string('kd_jabatan', 50);
            $table->string('kd_divisi', 50);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pegawai');
    }
}
