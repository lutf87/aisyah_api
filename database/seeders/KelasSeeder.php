<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kelas')->insert(
            [
                'kode_ruang' => 'A-1.1',
                'nama_kelas' => 'VII',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        );
        DB::table('kelas')->insert(
            [
                'kode_ruang' => 'B-1.1',
                'nama_kelas' => 'VIII',
                'kelompok' => 'A',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        );
        DB::table('kelas')->insert(
            [
                'kode_ruang' => 'B-1.2',
                'nama_kelas' => 'VIII',
                'kelompok' => 'B',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        );
        DB::table('kelas')->insert(
            [
                'kode_ruang' => 'C-1.1',
                'nama_kelas' => 'IX',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        );
    }
}
