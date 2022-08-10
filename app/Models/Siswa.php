<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;
    protected $guarded = [''];

    public function school(){
        return $this->belongsTo(School::class, "sekolah_id");
    }

    public function jurusan(){
        return $this->belongsTo(Jurusan::class, "jurusan_id");
    }
}
