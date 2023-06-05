<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MapelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //1
        DB::table('mapels')->insert(
            [
                'kode_mapel' => 'QH-A',
                'nama_mapel' => 'Al-Qur`an Hadis',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        );
        //2
        DB::table('mapels')->insert(
            [
                'kode_mapel' => 'AA-A',
                'nama_mapel' => 'Akidah Akhlak',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        );
        //3
        DB::table('mapels')->insert(
            [
                'kode_mapel' => 'FQ-A',
                'nama_mapel' => 'Fikih',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        );
        //4
        DB::table('mapels')->insert(
            [
                'kode_mapel' => 'SKI-A',
                'nama_mapel' => 'Sejarah Kebudayaan Islam',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        );
        //5
        DB::table('mapels')->insert(
            [
                'kode_mapel' => 'PPKN-A',
                'nama_mapel' => 'Pendidikan Pancasila dan Kewarganegaraan',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        );
        //6
        DB::table('mapels')->insert(
            [
                'kode_mapel' => 'BIN-A',
                'nama_mapel' => 'Bahasa indonesia',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        );
        //7
        DB::table('mapels')->insert(
            [
                'kode_mapel' => 'BA-A',
                'nama_mapel' => 'Bahasa Arab',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        );
        //8
        DB::table('mapels')->insert(
            [
                'kode_mapel' => 'MTK-A',
                'nama_mapel' => 'Matematika',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        );
        //9
        DB::table('mapels')->insert(
            [
                'kode_mapel' => 'IPA-A',
                'nama_mapel' => 'Ilmu Pengetahuan Alam',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        );
        //10
        DB::table('mapels')->insert(
            [
                'kode_mapel' => 'IPS-A',
                'nama_mapel' => 'Ilmu Pengetahuan Sosial',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        );
        //11
        DB::table('mapels')->insert(
            [
                'kode_mapel' => 'BING-A',
                'nama_mapel' => 'Bahasa inggris',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        );
        //12
        DB::table('mapels')->insert(
            [
                'kode_mapel' => 'SBK-A',
                'nama_mapel' => 'Seni Budaya',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        );
        //13
        DB::table('mapels')->insert(
            [
                'kode_mapel' => 'PJOK-B',
                'nama_mapel' => 'Pendidikan Jasmani, Olahraga dan Kesehatan',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        );
        //14
        DB::table('mapels')->insert(
            [
                'kode_mapel' => 'BJAW-B',
                'nama_mapel' => 'Bahasa Jawa',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        );
        //15
        DB::table('mapels')->insert(
            [
                'kode_mapel' => 'Pra-B',
                'nama_mapel' => 'Prakarya',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        );
    }
}
