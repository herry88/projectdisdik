<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schools', function (Blueprint $table) {
            $table->id();
            $table->string('namasekolah')->nullable();
            $table->string('alamat')->nullable();
            $table->unsignedBigInteger('wilayah_dki_id');
            $table->unsignedBigInteger('tahun_akademik_id');
            $table->BigInteger('jurusan_id')->unsigned();
            // $table->foreign('tahun_akademik_id')->references('id')->on('tahun_akademiks')->onDelete('cascade');
            // $table->foreign('jurusan_id')->references('id')->on('jurusans')->onDelete('cascade');
            // $table->foreign('wilayah_dki_id')->references('id')->on('wilayah_d_k_i_s')->onDelete('cascade');
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
        Schema::dropIfExists('schools');
    }
};
