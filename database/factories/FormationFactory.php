<?php

namespace Database\Factories;

use App\Models\Formation;
use Illuminate\Database\Eloquent\Factories\Factory;

class FormationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Formation::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this ->faker ->title,
            'description' => $this ->faker ->sentence(100),
            'prix' => $this ->faker->randomFloat(2, 0, 10000),
            'picture'=> $this->faker->imageUrl($width = 200, $height = 200),

            'module' => $this-> faker->sentence(10),
        ];
    }
}