<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PengumumanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pengumumen')->insert(
            [
                'judul' => 'Pembayaran Akhir Semester',
                'isi' => 'Sehubungan dengan diadakannya Penilaian Akhir Semester dimohon kepada wali murid untuk segera melunasi pembayaran sebesar Rp. 250.000 hingga batas waktu Sabtu, 21 Mei 2022.',
                'deadline' => "2023-06-20",
                'created_at' => now(),
                'updated_at' => now()
            ]
        );
        DB::table('pengumumen')->insert(
            [
                'judul' => 'Libur Sekolah',
                'isi' => 'Untuk memperingati hari pendidikan nasional siswa diharapkan mengkuti upacara di lapangan pada tanggal 2 bulan mei memakai seragam biru putih.',
                'deadline' => "2023-06-11",
                'created_at' => now(),
                'updated_at' => now()
            ]
        );
    }
}
