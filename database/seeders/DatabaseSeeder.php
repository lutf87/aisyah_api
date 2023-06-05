<?php

namespace Database\Seeders;

use App\Models\JadwalPelajaran;
use App\Models\JadwalSemester;
use App\Models\NilaiPas;
use App\Models\NilaiPts;
use App\Models\NilaiTugas;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        // $this->call(RuangSeeder::class);
        // $this->call(JadwalSeeder::class);
        $this->call(HariSeeder::class);
        $this->call(KelasSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(MapelSeeder::class);
        $this->call(GuruSeeder::class);
        $this->call(IzinSeeder::class);
        NilaiTugas::factory(1620)->create();
        NilaiPts::factory(540)->create();
        NilaiPas::factory(540)->create();
        JadwalPelajaran::factory(120)->create();
        JadwalSemester::factory(240)->create();
        $this->call(EkskulSeeder::class);
        $this->call(PengumumanSeeder::class);
    }
}
