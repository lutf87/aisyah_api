<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RuangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ruang')->insert(
            [
                'kode_ruang' => 'A-1.1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        );
        DB::table('ruang')->insert(
            [
                'kode_ruang' => 'A-1.2',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        );
        DB::table('ruang')->insert(
            [
                'kode_ruang' => 'B-1.1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        );
        DB::table('ruang')->insert(
            [
                'kode_ruang' => 'B-1.2',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        );
        DB::table('ruang')->insert(
            [
                'kode_ruang' => 'C-1.1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        );
        DB::table('ruang')->insert(
            [
                'kode_ruang' => 'C-1.2',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        );
    }
}
