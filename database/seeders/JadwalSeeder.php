<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JadwalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //kelas VII Hari Senin
        DB::table('jadwals')->insert(
            [
                'mapel_id' => 1,
                'guru_id' => 6,
                'kelas_id' => 1,
                'hari' => 'Senin',
                'kategori' => 'Pelajaran',
                'semester' => 'Ganjil',
                'mulai' => '07:30',
                'selesai' => '09:00'
            ]
        );
        DB::table('jadwals')->insert(
            [
                'mapel_id' => 2,
                'guru_id' => 7,
                'kelas_id' => 1,
                'hari' => 'Senin',
                'kategori' => 'Pelajaran',
                'semester' => 'Ganjil',
                'mulai' => '09:30',
                'selesai' => '11:00'
            ]
        );
        //kelas VII Hari Selasa
        DB::table('jadwals')->insert(
            [
                'mapel_id' => 3,
                'guru_id' => 8,
                'kelas_id' => 1,
                'hari' => 'Selasa',
                'kategori' => 'Pelajaran',
                'semester' => 'Ganjil',
                'mulai' => '07:00',
                'selesai' => '08:30'
            ]
        );
        DB::table('jadwals')->insert(
            [
                'mapel_id' => 4,
                'guru_id' => 9,
                'kelas_id' => 1,
                'hari' => 'Selasa',
                'kategori' => 'Pelajaran',
                'semester' => 'Ganjil',
                'mulai' => '09:00',
                'selesai' => '10:30'
            ]
        );
        DB::table('jadwals')->insert(
            [
                'mapel_id' => 5,
                'guru_id' => 10,
                'kelas_id' => 1,
                'hari' => 'Selasa',
                'kategori' => 'Pelajaran',
                'semester' => 'Ganjil',
                'mulai' => '10:30',
                'selesai' => '12:00'
            ]
        );
        // kelas VII Hari rabu
        DB::table('jadwals')->insert(
            [
                'mapel_id' => 6,
                'guru_id' => 11,
                'kelas_id' => 1,
                'hari' => 'Rabu',
                'kategori' => 'Pelajaran',
                'semester' => 'Ganjil',
                'mulai' => '07:00',
                'selesai' => '08:30'
            ]
        );
        DB::table('jadwals')->insert(
            [
                'mapel_id' => 7,
                'guru_id' => 12,
                'kelas_id' => 1,
                'hari' => 'Rabu',
                'kategori' => 'Pelajaran',
                'semester' => 'Ganjil',
                'mulai' => '09:00',
                'selesai' => '10:30'
            ]
        );
        DB::table('jadwals')->insert(
            [
                'mapel_id' => 8,
                'guru_id' => 13,
                'kelas_id' => 1,
                'hari' => 'Rabu',
                'kategori' => 'Pelajaran',
                'semester' => 'Ganjil',
                'mulai' => '10:30',
                'selesai' => '12:00'
            ]
        );
        // kelas VII hari kamis
        DB::table('jadwals')->insert(
            [
                'mapel_id' => 9,
                'guru_id' => 14,
                'kelas_id' => 1,
                'hari' => 'Kamis',
                'kategori' => 'Pelajaran',
                'semester' => 'Ganjil',
                'mulai' => '07:00',
                'selesai' => '08:30'
            ]
        );
        DB::table('jadwals')->insert(
            [
                'mapel_id' => 10,
                'guru_id' => 15,
                'kelas_id' => 1,
                'hari' => 'Kamis',
                'kategori' => 'Pelajaran',
                'semester' => 'Ganjil',
                'mulai' => '09:00',
                'selesai' => '10:30'
            ]
        );
        DB::table('jadwals')->insert(
            [
                'mapel_id' => 11,
                'guru_id' => 16,
                'kelas_id' => 1,
                'hari' => 'Selasa',
                'kategori' => 'Pelajaran',
                'semester' => 'Ganjil',
                'mulai' => '10:30',
                'selesai' => '12:00'
            ]
        );
        // kelas VII hari Jum'at
        DB::table('jadwals')->insert(
            [
                'mapel_id' => 12,
                'guru_id' => 17,
                'kelas_id' => 1,
                'hari' => 'Jum`at',
                'kategori' => 'Pelajaran',
                'semester' => 'Ganjil',
                'mulai' => '07:30',
                'selesai' => '09:00'
            ]
        );
        DB::table('jadwals')->insert(
            [
                'mapel_id' => 13,
                'guru_id' => 18,
                'kelas_id' => 1,
                'hari' => 'Jum`at',
                'kategori' => 'Pelajaran',
                'semester' => 'Ganjil',
                'mulai' => '09:30',
                'selesai' => '11:00'
            ]
        );
        // kelas VII hari sabtu
        DB::table('jadwals')->insert(
            [
                'mapel_id' => 14,
                'guru_id' => 19,
                'kelas_id' => 1,
                'hari' => 'Sabtu',
                'kategori' => 'Pelajaran',
                'semester' => 'Ganjil',
                'mulai' => '07:00',
                'selesai' => '09:00'
            ]
        );
        DB::table('jadwals')->insert(
            [
                'mapel_id' => 15,
                'guru_id' => 20,
                'kelas_id' => 1,
                'hari' => 'Selasa',
                'kategori' => 'Pelajaran',
                'semester' => 'Ganjil',
                'mulai' => '09:30',
                'selesai' => '11:00'
            ]
        );



        //kelas VIII-A Hari Senin
        DB::table('jadwals')->insert(
            [
                'mapel_id' => 6,
                'guru_id' => 21,
                'kelas_id' => 2,
                'hari' => 'Senin',
                'kategori' => 'Pelajaran',
                'semester' => 'Ganjil',
                'mulai' => '07:30',
                'selesai' => '09:00'
            ]
        );
        DB::table('jadwals')->insert(
            [
                'mapel_id' => 7,
                'guru_id' => 1,
                'kelas_id' => 2,
                'hari' => 'Senin',
                'kategori' => 'Pelajaran',
                'semester' => 'Ganjil',
                'mulai' => '09:30',
                'selesai' => '11:00'
            ]
        );
        //kelas VIII-A Hari Selasa
        DB::table('jadwals')->insert(
            [
                'mapel_id' => 8,
                'guru_id' => 2,
                'kelas_id' => 2,
                'hari' => 'Selasa',
                'kategori' => 'Pelajaran',
                'semester' => 'Ganjil',
                'mulai' => '07:00',
                'selesai' => '08:30'
            ]
        );
        DB::table('jadwals')->insert(
            [
                'mapel_id' => 9,
                'guru_id' => 3,
                'kelas_id' => 2,
                'hari' => 'Selasa',
                'kategori' => 'Pelajaran',
                'semester' => 'Ganjil',
                'mulai' => '09:00',
                'selesai' => '10:30'
            ]
        );
        DB::table('jadwals')->insert(
            [
                'mapel_id' => 10,
                'guru_id' => 4,
                'kelas_id' => 2,
                'hari' => 'Selasa',
                'kategori' => 'Pelajaran',
                'semester' => 'Ganjil',
                'mulai' => '10:30',
                'selesai' => '12:00'
            ]
        );
        // kelas VIII-A Hari rabu
        DB::table('jadwals')->insert(
            [
                'mapel_id' => 11,
                'guru_id' => 4,
                'kelas_id' => 2,
                'hari' => 'Rabu',
                'kategori' => 'Pelajaran',
                'semester' => 'Ganjil',
                'mulai' => '07:00',
                'selesai' => '08:30'
            ]
        );
        DB::table('jadwals')->insert(
            [
                'mapel_id' => 12,
                'guru_id' => 5,
                'kelas_id' => 2,
                'hari' => 'Rabu',
                'kategori' => 'Pelajaran',
                'semester' => 'Ganjil',
                'mulai' => '09:00',
                'selesai' => '10:30'
            ]
        );
        DB::table('jadwals')->insert(
            [
                'mapel_id' => 13,
                'guru_id' => 6,
                'kelas_id' => 2,
                'hari' => 'Rabu',
                'kategori' => 'Pelajaran',
                'semester' => 'Ganjil',
                'mulai' => '10:30',
                'selesai' => '12:00'
            ]
        );
        // kelas VIII-A hari kamis
        DB::table('jadwals')->insert(
            [
                'mapel_id' => 14,
                'guru_id' => 7,
                'kelas_id' => 2,
                'hari' => 'Kamis',
                'kategori' => 'Pelajaran',
                'semester' => 'Ganjil',
                'mulai' => '07:00',
                'selesai' => '08:30'
            ]
        );
        DB::table('jadwals')->insert(
            [
                'mapel_id' => 15,
                'guru_id' => 8,
                'kelas_id' => 2,
                'hari' => 'Kamis',
                'kategori' => 'Pelajaran',
                'semester' => 'Ganjil',
                'mulai' => '09:00',
                'selesai' => '10:30'
            ]
        );
        DB::table('jadwals')->insert(
            [
                'mapel_id' => 1,
                'guru_id' => 9,
                'kelas_id' => 2,
                'hari' => 'Selasa',
                'kategori' => 'Pelajaran',
                'semester' => 'Ganjil',
                'mulai' => '10:30',
                'selesai' => '12:00'
            ]
        );
        // kelas VIII-A hari Jum'at
        DB::table('jadwals')->insert(
            [
                'mapel_id' => 2,
                'guru_id' => 10,
                'kelas_id' => 2,
                'hari' => 'Jum`at',
                'kategori' => 'Pelajaran',
                'semester' => 'Ganjil',
                'mulai' => '07:30',
                'selesai' => '09:00'
            ]
        );
        DB::table('jadwals')->insert(
            [
                'mapel_id' => 3,
                'guru_id' => 11,
                'kelas_id' => 2,
                'hari' => 'Jum`at',
                'kategori' => 'Pelajaran',
                'semester' => 'Ganjil',
                'mulai' => '09:30',
                'selesai' => '11:00'
            ]
        );
        // kelas VIII-A hari sabtu
        DB::table('jadwals')->insert(
            [
                'mapel_id' => 4,
                'guru_id' => 12,
                'kelas_id' => 2,
                'hari' => 'Sabtu',
                'kategori' => 'Pelajaran',
                'semester' => 'Ganjil',
                'mulai' => '07:00',
                'selesai' => '09:00'
            ]
        );
        DB::table('jadwals')->insert(
            [
                'mapel_id' => 5,
                'guru_id' => 13,
                'kelas_id' => 2,
                'hari' => 'Selasa',
                'kategori' => 'Pelajaran',
                'semester' => 'Ganjil',
                'mulai' => '09:30',
                'selesai' => '11:00'
            ]
        );


        //kelas VIII-B Hari Senin
        DB::table('jadwals')->insert(
            [
                'mapel_id' => 14,
                'guru_id' => 14,
                'kelas_id' => 3,
                'hari' => 'Senin',
                'kategori' => 'Pelajaran',
                'semester' => 'Ganjil',
                'mulai' => '07:30',
                'selesai' => '09:00'
            ]
        );
        DB::table('jadwals')->insert(
            [
                'mapel_id' => 15,
                'guru_id' => 15,
                'kelas_id' => 3,
                'hari' => 'Senin',
                'kategori' => 'Pelajaran',
                'semester' => 'Ganjil',
                'mulai' => '09:30',
                'selesai' => '11:00'
            ]
        );
        //kelas VIII-B Hari Selasa
        DB::table('jadwals')->insert(
            [
                'mapel_id' => 1,
                'guru_id' => 16,
                'kelas_id' => 3,
                'hari' => 'Selasa',
                'kategori' => 'Pelajaran',
                'semester' => 'Ganjil',
                'mulai' => '07:00',
                'selesai' => '08:30'
            ]
        );
        DB::table('jadwals')->insert(
            [
                'mapel_id' => 2,
                'guru_id' => 17,
                'kelas_id' => 3,
                'hari' => 'Selasa',
                'kategori' => 'Pelajaran',
                'semester' => 'Ganjil',
                'mulai' => '09:00',
                'selesai' => '10:30'
            ]
        );
        DB::table('jadwals')->insert(
            [
                'mapel_id' => 3,
                'guru_id' => 18,
                'kelas_id' => 3,
                'hari' => 'Selasa',
                'kategori' => 'Pelajaran',
                'semester' => 'Ganjil',
                'mulai' => '10:30',
                'selesai' => '12:00'
            ]
        );
        // kelas VIII-B Hari rabu
        DB::table('jadwals')->insert(
            [
                'mapel_id' => 4,
                'guru_id' => 19,
                'kelas_id' => 3,
                'hari' => 'Rabu',
                'kategori' => 'Pelajaran',
                'semester' => 'Ganjil',
                'mulai' => '07:00',
                'selesai' => '08:30'
            ]
        );
        DB::table('jadwals')->insert(
            [
                'mapel_id' => 5,
                'guru_id' => 20,
                'kelas_id' => 3,
                'hari' => 'Rabu',
                'kategori' => 'Pelajaran',
                'semester' => 'Ganjil',
                'mulai' => '09:00',
                'selesai' => '10:30'
            ]
        );
        DB::table('jadwals')->insert(
            [
                'mapel_id' => 6,
                'guru_id' => 21,
                'kelas_id' => 3,
                'hari' => 'Rabu',
                'kategori' => 'Pelajaran',
                'semester' => 'Ganjil',
                'mulai' => '10:30',
                'selesai' => '12:00'
            ]
        );
        // kelas VIII-B hari kamis
        DB::table('jadwals')->insert(
            [
                'mapel_id' => 7,
                'guru_id' => 1,
                'kelas_id' => 3,
                'hari' => 'Kamis',
                'kategori' => 'Pelajaran',
                'semester' => 'Ganjil',
                'mulai' => '07:00',
                'selesai' => '08:30'
            ]
        );
        DB::table('jadwals')->insert(
            [
                'mapel_id' => 8,
                'guru_id' => 2,
                'kelas_id' => 3,
                'hari' => 'Kamis',
                'kategori' => 'Pelajaran',
                'semester' => 'Ganjil',
                'mulai' => '09:00',
                'selesai' => '10:30'
            ]
        );
        DB::table('jadwals')->insert(
            [
                'mapel_id' => 9,
                'guru_id' => 3,
                'kelas_id' => 3,
                'hari' => 'Selasa',
                'kategori' => 'Pelajaran',
                'semester' => 'Ganjil',
                'mulai' => '10:30',
                'selesai' => '12:00'
            ]
        );
        // kelas VIII-B hari Jum'at
        DB::table('jadwals')->insert(
            [
                'mapel_id' => 10,
                'guru_id' => 4,
                'kelas_id' => 3,
                'hari' => 'Jum`at',
                'kategori' => 'Pelajaran',
                'semester' => 'Ganjil',
                'mulai' => '07:30',
                'selesai' => '09:00'
            ]
        );
        DB::table('jadwals')->insert(
            [
                'mapel_id' => 11,
                'guru_id' => 5,
                'kelas_id' => 3,
                'hari' => 'Jum`at',
                'kategori' => 'Pelajaran',
                'semester' => 'Ganjil',
                'mulai' => '09:30',
                'selesai' => '11:00'
            ]
        );
        // kelas VIII-B hari sabtu
        DB::table('jadwals')->insert(
            [
                'mapel_id' => 12,
                'guru_id' => 6,
                'kelas_id' => 3,
                'hari' => 'Sabtu',
                'kategori' => 'Pelajaran',
                'semester' => 'Ganjil',
                'mulai' => '07:00',
                'selesai' => '09:00'
            ]
        );
        DB::table('jadwals')->insert(
            [
                'mapel_id' => 13,
                'guru_id' => 7,
                'kelas_id' => 3,
                'hari' => 'Selasa',
                'kategori' => 'Pelajaran',
                'semester' => 'Ganjil',
                'mulai' => '09:30',
                'selesai' => '11:00'
            ]
        );



        //kelas IX Hari Senin
        DB::table('jadwals')->insert(
            [
                'mapel_id' => 9,
                'guru_id' => 8,
                'kelas_id' => 4,
                'hari' => 'Senin',
                'kategori' => 'Pelajaran',
                'semester' => 'Ganjil',
                'mulai' => '07:30',
                'selesai' => '09:00'
            ]
        );
        DB::table('jadwals')->insert(
            [
                'mapel_id' => 10,
                'guru_id' => 9,
                'kelas_id' => 4,
                'hari' => 'Senin',
                'kategori' => 'Pelajaran',
                'semester' => 'Ganjil',
                'mulai' => '09:30',
                'selesai' => '11:00'
            ]
        );
        //kelas IX Hari Selasa
        DB::table('jadwals')->insert(
            [
                'mapel_id' => 11,
                'guru_id' => 10,
                'kelas_id' => 4,
                'hari' => 'Selasa',
                'kategori' => 'Pelajaran',
                'semester' => 'Ganjil',
                'mulai' => '07:00',
                'selesai' => '08:30'
            ]
        );
        DB::table('jadwals')->insert(
            [
                'mapel_id' => 12,
                'guru_id' => 11,
                'kelas_id' => 4,
                'hari' => 'Selasa',
                'kategori' => 'Pelajaran',
                'semester' => 'Ganjil',
                'mulai' => '09:00',
                'selesai' => '10:30'
            ]
        );
        DB::table('jadwals')->insert(
            [
                'mapel_id' => 13,
                'guru_id' => 12,
                'kelas_id' => 4,
                'hari' => 'Selasa',
                'kategori' => 'Pelajaran',
                'semester' => 'Ganjil',
                'mulai' => '10:30',
                'selesai' => '12:00'
            ]
        );
        // kelas IX Hari rabu
        DB::table('jadwals')->insert(
            [
                'mapel_id' => 14,
                'guru_id' => 13,
                'kelas_id' => 4,
                'hari' => 'Rabu',
                'kategori' => 'Pelajaran',
                'semester' => 'Ganjil',
                'mulai' => '07:00',
                'selesai' => '08:30'
            ]
        );
        DB::table('jadwals')->insert(
            [
                'mapel_id' => 15,
                'guru_id' => 14,
                'kelas_id' => 4,
                'hari' => 'Rabu',
                'kategori' => 'Pelajaran',
                'semester' => 'Ganjil',
                'mulai' => '09:00',
                'selesai' => '10:30'
            ]
        );
        DB::table('jadwals')->insert(
            [
                'mapel_id' => 1,
                'guru_id' => 15,
                'kelas_id' => 4,
                'hari' => 'Rabu',
                'kategori' => 'Pelajaran',
                'semester' => 'Ganjil',
                'mulai' => '10:30',
                'selesai' => '12:00'
            ]
        );
        // kelas IX hari kamis
        DB::table('jadwals')->insert(
            [
                'mapel_id' => 2,
                'guru_id' => 16,
                'kelas_id' => 4,
                'hari' => 'Kamis',
                'kategori' => 'Pelajaran',
                'semester' => 'Ganjil',
                'mulai' => '07:00',
                'selesai' => '08:30'
            ]
        );
        DB::table('jadwals')->insert(
            [
                'mapel_id' => 3,
                'guru_id' => 17,
                'kelas_id' => 4,
                'hari' => 'Kamis',
                'kategori' => 'Pelajaran',
                'semester' => 'Ganjil',
                'mulai' => '09:00',
                'selesai' => '10:30'
            ]
        );
        DB::table('jadwals')->insert(
            [
                'mapel_id' => 4,
                'guru_id' => 18,
                'kelas_id' => 4,
                'hari' => 'Selasa',
                'kategori' => 'Pelajaran',
                'semester' => 'Ganjil',
                'mulai' => '10:30',
                'selesai' => '12:00'
            ]
        );
        // kelas IX hari Jum'at
        DB::table('jadwals')->insert(
            [
                'mapel_id' => 5,
                'guru_id' => 19,
                'kelas_id' => 4,
                'hari' => 'Jum`at',
                'kategori' => 'Pelajaran',
                'semester' => 'Ganjil',
                'mulai' => '07:30',
                'selesai' => '09:00'
            ]
        );
        DB::table('jadwals')->insert(
            [
                'mapel_id' => 6,
                'guru_id' => 20,
                'kelas_id' => 4,
                'hari' => 'Jum`at',
                'kategori' => 'Pelajaran',
                'semester' => 'Ganjil',
                'mulai' => '09:30',
                'selesai' => '11:00'
            ]
        );
        // kelas VIII-B hari sabtu
        DB::table('jadwals')->insert(
            [
                'mapel_id' => 7,
                'guru_id' => 21,
                'kelas_id' => 4,
                'hari' => 'Sabtu',
                'kategori' => 'Pelajaran',
                'semester' => 'Ganjil',
                'mulai' => '07:00',
                'selesai' => '09:00'
            ]
        );
        DB::table('jadwals')->insert(
            [
                'mapel_id' => 8,
                'guru_id' => 1,
                'kelas_id' => 4,
                'hari' => 'Selasa',
                'kategori' => 'Pelajaran',
                'semester' => 'Ganjil',
                'mulai' => '09:30',
                'selesai' => '11:00'
            ]
        );
    }
}
