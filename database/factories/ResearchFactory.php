<?php

namespace Database\Factories;

use App\Models\Research;
use Illuminate\Database\Eloquent\Factories\Factory;

class ResearchFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Research::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->name(),
            'year' => $this->faker->year(),
            'theme' => collect(['Data Sains', 'System Engineering'])->shuffle()->first(),
            'information' => $this->faker->sentence(mt_rand(0, 5)),
        ];
    }
}
