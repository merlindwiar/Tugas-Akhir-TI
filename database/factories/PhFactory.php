<?php

namespace Database\Factories;
use App\Models\Ph;
// use App\Models\Model;
use Illuminate\Database\Eloquent\Factories\Factory;

class PhFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Ph::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'kadar_ph'=>$this->faker->numberBetween(1,14),
            'alat_id'=>1,
            'status_ph_id'=>$this->faker->numberBetween(1,3),
        ];
    }
}
