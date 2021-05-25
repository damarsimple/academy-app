<?php

namespace Database\Factories;

use App\Models\Pkm;
use Illuminate\Database\Eloquent\Factories\Factory;

class PkmFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Pkm::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => 'Sosialisasi Dan Penyerahan Rancangan Cold Storage Sebagai Tempat Penyimpanan Hasil Panen Urban Farming “Mom’s Farm” Di Kampung Nagrek',
            'integration_type' => 'Hasil pengabdian jadi bahan ajar dan bahan evaluasi',
            'theme' => collect(['Desa Terpadu', 'Bank Sampah Induk Gesit – Jakarta Selatan dan Peningkatan Kualitas SDM Masyarakat'])->shuffle()->first(),
            'year' => $this->faker->year()
        ];
    }
}
