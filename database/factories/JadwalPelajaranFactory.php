<?php

namespace Database\Factories;

use App\Models\JadwalPelajaran;
use Illuminate\Database\Eloquent\Factories\Factory;

class JadwalPelajaranFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    protected $model = JadwalPelajaran::class;

    public function definition()
    {
        return [
            'mapel_id' => $this->faker->randomElement(['1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15']),
            'guru_id' => $this->faker->randomElement(['1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15']),
            'kelas_id' => $this->faker->randomElement(['1', '2', '3', '4']),
            'hari_id' => $this->faker->randomElement(['1', '2', '3', '4', '5', '6']),
            'semester' => $this->faker->randomElement(['Ganjil', 'Genap']),
            'mulai' => $this->faker->randomElement(['07:00', '09:00', '09:30']),
            'selesai' => $this->faker->randomElement(['11:00', '11:30', '12:00']),
        ];
    }
}
