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
        Schema::create('siswas', function (Blueprint $table) {
            $table->id();
            $table->string('nisn', 100)->nullable();
            $table->string('namasiswa', 100)->nullable();
            $table->text('alamat')->nullable();
            $table->enum('jenis_kelamin', ['laki-laki', 'perempuan'])->nullable();
            $table->string('ttl', 100)->nullable();
            $table->unsignedBigInteger('sekolah_id');
            $table->unsignedBigInteger('jurusan_id');
            // $table->foreign('sekolah_id')->references('id')->on('schools')->onusersDelete('cascade');
            // $table->foreign('jurusan_id')->references('id')->on('jurusans')->onDelete('cascade');
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
        Schema::dropIfExists('siswas');
    }
};
