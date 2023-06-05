<?php

namespace Database\Factories;

use App\Models\NilaiPts;
use Illuminate\Database\Eloquent\Factories\Factory;

class NilaiPtsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    protected $model = NilaiPts::class;
    public function definition()
    {
        return [
            'user_id' => $this->faker->randomElement(['1', '2', '3', '4', '5', '6']),
            'mapel_id' => $this->faker->randomElement(['1', '2', '3', '4', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15']),
            'kelas' => $this->faker->randomElement(['VII', 'VIII', 'IX']),
            'semester' => $this->faker->randomElement(['Ganjil', 'Genap']),
            'nilai' => $this->faker->randomElement(['65', '70', '75', '80', '85', '90', '95']),
        ];
    }
}
