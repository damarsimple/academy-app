<?php

namespace Database\Factories;

use App\Models\Achievement;
use Illuminate\Database\Eloquent\Factories\Factory;

class AchievementFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Achievement::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => 'Mahasiswa Berprestasi',
            'is_international' => mt_rand(0, 10) > 5,
            'is_national' => mt_rand(0, 10) > 5,
            'is_local' => mt_rand(0, 10) > 5,
            'is_academic' => mt_rand(0, 10) > 5,
            'start_at' => now(),
            'finish_at' => now()->addDay(40),
            'description' => 'Juara 100'
        ];
    }
}
