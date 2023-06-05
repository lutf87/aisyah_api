<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(
            [
                'nama_siswa' => "Abdul Latif",
                'nisn' => 2343001,
                'jkel' => "L",
                'alamat' => "Kediri",
                'nama_wali' => "Hendro",
                'kelas_id' => 1,
                'password' => Hash::make('abdul'),
                'created_at' => now(),
                'updated_at' => now()
            ],
        );
        DB::table('users')->insert(
            [
                'nama_siswa' => "Lina Asyifa",
                'nisn' => 2343002,
                'jkel' => "P",
                'kelas_id' => 2,
                'alamat' => "Kediri",
                'nama_wali' => "Budi",
                'kelas_id' => 2,
                'password' => Hash::make('lina'),
                'created_at' => now(),
                'updated_at' => now()
            ]
        );
        DB::table('users')->insert(
            [
                'nama_siswa' => "Candra Prakoso",
                'nisn' => 2343003,
                'jkel' => "L",
                'alamat' => "Kediri",
                'nama_wali' => "Handoko",
                'kelas_id' => 3,
                'password' => Hash::make('candra'),
                'created_at' => now(),
                'updated_at' => now()
            ],
        );
        DB::table('users')->insert(
            [
                'nama_siswa' => "Hana Palastari",
                'nisn' => 2343004,
                'jkel' => "P",
                'alamat' => "Kediri",
                'nama_wali' => "Mujiono",
                'kelas_id' => 4,
                'password' => Hash::make('hana'),
                'created_at' => now(),
                'updated_at' => now()
            ],
        );
        DB::table('users')->insert(
            [
                'nama_siswa' => "Edward Gunawan",
                'nisn' => 2343005,
                'jkel' => "L",
                'alamat' => "Kediri",
                'nama_wali' => "Hendro",
                'kelas_id' => 2,
                'password' => Hash::make('edward'),
                'created_at' => now(),
                'updated_at' => now()
            ],
        );
        DB::table('users')->insert(
            [
                'nama_siswa' => "Elisa Lailasari",
                'nisn' => 2343006,
                'jkel' => "P",
                'alamat' => "Kediri",
                'nama_wali' => "Budi",
                'kelas_id' => 1,
                'password' => Hash::make('elisa'),
                'created_at' => now(),
                'updated_at' => now()
            ]
        );
    }
}
