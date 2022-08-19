<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Task;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Task::create([
            'task_name' => 'MoU Dengan Industri Atau Kelas Industri',
            'score' => 8.5,
            'stage' => 1,
        ]);

        Task::create([
            'task_name' => 'Sinkronisasi Kurikulum Dengan Industri',
            'score' => 8.5,
            'stage' => 1,
        ]);

        Task::create([
            'task_name' => 'Kelas Industri Seleksi / Perekrutan Kelas Industri.',
            'score' => 8.5,
            'stage' => 1
        ]);

        Task::create([
            'task_name' => 'Magang Guru di Industri (Minimal 50 Jam/Semester)',
            'score' => 8.5,
            'stage' => 2
        ]);

        Task::create([
            'task_name' => 'Guru Tamu Dari Industri (Minimal 50 Jam/Semester)',
            'score' => 8.5,
            'stage' => 2
        ]);

        Task::create([
            'task_name' => 'Uji Sertifikasi Kompetensi Yang Mengacu Kepada SKKNI',
            'score' => 8.5,
            'stage' => 3
        ]);

        Task::create([
            'task_name' => 'Perekrutan Tamatan dari Industri yang melaksanakan MOU',
            'score' => 8.5,
            'stage' => 3
        ]);
    }
}
