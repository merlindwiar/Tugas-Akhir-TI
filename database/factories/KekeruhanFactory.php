<?php

namespace Database\Factories;

use App\Models\Kekeruhan;
use Illuminate\Database\Eloquent\Factories\Factory;

class KekeruhanFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Kekeruhan::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'alat_id'=>1,
            'status_kekeruhan_id'=>$this->faker->numberBetween(4,5),
            'NTU'=>$this->faker->numberBetween(1,10),
        ];
    }
}
