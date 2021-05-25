<?php

namespace Database\Factories;

use App\Models\Recognition;
use Illuminate\Database\Eloquent\Factories\Factory;

class RecognitionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Recognition::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition() 
    {
        return [
            'proof' => 'Mitra Bestari Jurnal Nasional: Jurnal Keilmuan dan Aplikasi Teknik Industri, Universitas Kristen Petra (Akreditasi, Sinta S2)',
            'specialty' => 'Manajemen Kualitas, Manajemen industri, Inovasi sistem industri',
            'is_international' => mt_rand(0,10) > 5,
            'is_national' => mt_rand(0,10) > 5,
            'is_local' => mt_rand(0,10) > 5,
            'start_at' => mt_rand(2015,2030),
            'finish_at' => mt_rand(2015,2030)
        ];
    }
}
