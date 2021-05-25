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

    private function getOrNull($any = '', $default = null){
        return mt_rand(0,10) % 2 == 0 ? $any : $default;
    }
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'nidn' => mt_rand(1000000000,9999999999),
            'doctor_degree' => $this->getOrNull('S3 Master Komputer'),
            'magister_degree' => $this->getOrNull('S2 Master Komputer'),
            'bachelor_degree' => $this->getOrNull('S1 Master Komputer'),
            'education_certificate_number' => mt_rand(1000000000,9999999999),
            'academic_job' => $this->getOrNull('Asisten Keahlian Tamvan'),
            'specialty' => $this->getOrNull('Supply Chain Management'),
            'certificate_competent_name' => $this->getOrNull(' SAP University Alliance, Jakarta SAP Fundamental Training (Training for Trainers)'),
            'is_ps_competent' => mt_rand(0,5) % 2 == mt_rand(0,1)
        ];
    }
}
