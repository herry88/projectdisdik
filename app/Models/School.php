<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    use HasFactory;
    protected $guarded = [''];

    public function tahunAkademik(){
        return $this->belongsTo(TahunAkademik::class);
    }

    public function wilayahDKI(){
        return $this->belongsTo(WilayahDKI::class, "wilayah_dki_id");
    }

    public function jurusan(){
        return $this->belongsTo(Jurusan::class, "jurusan_id");
    }

    public function siswa(){
        return $this->hasMany(Siswa::class);
    }
}
