<?php

namespace Database\Factories;

use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

class StudentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Student::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $graduated = mt_rand(0, 5) % 2 == 0;
        return [
            'name' => $this->faker->name(),
            'nim' => mt_rand(1000000000, 9999999999),
            'is_active' => true,
            'is_foreign' => mt_rand(0, 5) % 2 == 0,
            'is_fulltime' =>  mt_rand(0, 5) % 2 == 0,
            'is_graduated' => $graduated,
            'graduated_at' => $graduated ? now()->addYear(mt_rand(1, 4)) : null
        ];
    }
}
