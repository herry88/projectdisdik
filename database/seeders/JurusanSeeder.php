<?php

namespace Database\Seeders;

use App\Models\Jurusan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JurusanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                "nama" => "Rekayasa Perangkat Lunak",
            ],
            [
                "nama" => "Teknik Komputer dan Jaringan",
            ],
            [
                "nama" => "Multimedia",
            ],
        ];

        foreach ($data as $d ) {
            Jurusan::create($d);
        }
    }
}
