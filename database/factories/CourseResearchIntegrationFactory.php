<?php

namespace Database\Factories;

use App\Models\CourseResearchIntegration;
use Illuminate\Database\Eloquent\Factories\Factory;

class CourseResearchIntegrationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = CourseResearchIntegration::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'integration_type' => 'Hasil pengabdian jadi bahan ajar dan bahan evaluasi',
            'year' =>  $this->faker->year()
        ];
    }
}
