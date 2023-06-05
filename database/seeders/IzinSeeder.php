<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IzinSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('perizinans')->insert(
            [
                'user_id' => 1,
                'mulai' => '2023-05-10',
                'selesai' => '2023-05-11',
                'judul_izin' => 'Bepergian',
                'pesan_izin' => 'Tamasya',
                'bukti' => 'izin.jpg',
                'created_at' => now(),
                'updated_at' => now()
            ]
        );
        DB::table('perizinans')->insert(
            [
                'user_id' => 2,
                'mulai' => '2023-05-10',
                'selesai' => '2023-05-11',
                'judul_izin' => 'Bepergian',
                'pesan_izin' => 'Tamasya',
                'bukti' => 'izin.jpg',
                'created_at' => now(),
                'updated_at' => now()
            ]
        );
        DB::table('perizinans')->insert(
            [
                'user_id' => 3,
                'mulai' => '2023-05-10',
                'selesai' => '2023-05-11',
                'judul_izin' => 'Bepergian',
                'pesan_izin' => 'Tamasya',
                'bukti' => 'izin.jpg',
                'created_at' => now(),
                'updated_at' => now()
            ]
        );
        DB::table('perizinans')->insert(
            [
                'user_id' => 4,
                'mulai' => '2023-05-10',
                'selesai' => '2023-05-11',
                'judul_izin' => 'Bepergian',
                'pesan_izin' => 'Tamasya',
                'bukti' => 'izin.jpg',
                'created_at' => now(),
                'updated_at' => now()
            ]
        );
        DB::table('perizinans')->insert(
            [
                'user_id' => 2,
                'mulai' => '2023-05-10',
                'selesai' => '2023-05-11',
                'judul_izin' => 'Bepergian',
                'pesan_izin' => 'Tamasya',
                'bukti' => 'izin.jpg',
                'created_at' => now(),
                'updated_at' => now()
            ]
        );
        DB::table('perizinans')->insert(
            [
                'user_id' => 1,
                'mulai' => '2023-05-10',
                'selesai' => '2023-05-11',
                'judul_izin' => 'Bepergian',
                'pesan_izin' => 'Tamasya',
                'bukti' => 'izin.jpg',
                'created_at' => now(),
                'updated_at' => now()
            ]
        );
        DB::table('perizinans')->insert(
            [
                'user_id' => 3,
                'mulai' => '2023-05-10',
                'selesai' => '2023-05-11',
                'judul_izin' => 'Bepergian',
                'pesan_izin' => 'Tamasya',
                'bukti' => 'izin.jpg',
                'created_at' => now(),
                'updated_at' => now()
            ]
        );
        DB::table('perizinans')->insert(
            [
                'user_id' => 4,
                'mulai' => '2023-05-10',
                'selesai' => '2023-05-11',
                'judul_izin' => 'Bepergian',
                'pesan_izin' => 'Tamasya',
                'bukti' => 'izin.jpg',
                'created_at' => now(),
                'updated_at' => now()
            ]
        );
        DB::table('perizinans')->insert(
            [
                'user_id' => 2,
                'mulai' => '2023-05-10',
                'selesai' => '2023-05-11',
                'judul_izin' => 'Bepergian',
                'pesan_izin' => 'Tamasya',
                'bukti' => 'izin.jpg',
                'created_at' => now(),
                'updated_at' => now()
            ]
        );
        DB::table('perizinans')->insert(
            [
                'user_id' => 4,
                'mulai' => '2023-05-10',
                'selesai' => '2023-05-11',
                'judul_izin' => 'Bepergian',
                'pesan_izin' => 'Tamasya',
                'bukti' => 'izin.jpg',
                'created_at' => now(),
                'updated_at' => now()
            ]
        );
    }
}
