<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EkskulSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ekskuls')->insert(
            [
                'nama_ekskul' => 'Pramuka',
                'hari' => 'Sabtu',
                'mulai' => '12:00',
                'selesai' => '14:00',
                'lokasi' => 'Halaman Sekolah',
            ]
        );
        DB::table('ekskuls')->insert(
            [
                'nama_ekskul' => 'Futsal',
                'hari' => 'Jum`at',
                'mulai' => '14:00',
                'selesai' => '16:00',
                'lokasi' => 'Lapangan Sekolah',
            ]
        );
    }
}
