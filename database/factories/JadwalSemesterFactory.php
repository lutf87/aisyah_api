<?php

namespace Database\Factories;

use App\Models\JadwalSemester;
use Illuminate\Database\Eloquent\Factories\Factory;

class JadwalSemesterFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    protected $model = JadwalSemester::class;

    public function definition()
    {
        return [
            'mapel_id' => $this->faker->randomElement(['1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15']),
            'guru_id' => $this->faker->randomElement(['1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15']),
            'kelas_id' => $this->faker->randomElement(['1', '2', '3', '4']),
            'hari_id' => $this->faker->randomElement(['1', '2', '3', '4', '5', '6']),
            'semester' => $this->faker->randomElement(['Ganjil', 'Genap']),
            'kategori' => $this->faker->randomElement(['PTS', 'PAS']),
            'tanggal' => $this->faker->dateTimeInInterval('now', '+5 days'),
            // 'kode_ruang' => $this->faker->randomElement(['A-1.1', 'B-1.1', 'B-1.2', 'C-1.1']),
            'mulai' => $this->faker->randomElement(['07:00', '09:00', '09:30']),
            'selesai' => $this->faker->randomElement(['11:00', '11:30', '12:00']),
        ];
    }
}
