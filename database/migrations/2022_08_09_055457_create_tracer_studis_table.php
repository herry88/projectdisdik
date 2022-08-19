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
        Schema::create('tracer_studis', function (Blueprint $table) {
            $table->id();
            $table->string('nisn', 100)->nullable();
            $table->string('namaalumni', 100)->nullable();
            $table->string('tahun_lulus', 100)->nullable();
            $table->unsignedBigInteger('jurusan_id');
            // $table->foreign('jurusan_id')->references('id')->on('jurusans')->onDelete('cascade');
            // $table->enum('sasaran', ['kosong', 'wirausaha','bekerja'])->nullable();

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
        Schema::dropIfExists('tracer_studis');
    }
};
