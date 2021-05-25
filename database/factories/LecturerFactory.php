<?php

namespace Database\Factories;

use App\Models\Lecturer;
use Illuminate\Database\Eloquent\Factories\Factory;

class LecturerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Lecturer::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'nidn' => mt_rand(0, 10),
            'doctor_degree' => 'S3 WEABOISME',
            'magister_degree' => 'S2 Tamvanisme',
            'specialty' => 'Tamvan',
            'education_certificate_number' => '1123123',
            'is_ps_competent' => mt_rand(1, 5) % 2 == 0
        ];
    }
}
