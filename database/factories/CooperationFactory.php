<?php

namespace Database\Factories;

use App\Models\Cooperation;
use Illuminate\Database\Eloquent\Factories\Factory;

class CooperationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Cooperation::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => 'Pengabdian Masyarakat Berupa Pengembangan Kegiatan Kewirausahaan Budidaya Lele Dan Hidroponik Pada Masyarakat Desa Sampora',
            'institution_name' => 'RT 005 Desa Sampora, Cisauk, Tangerang Selatan ',
            'benefit' => 'Banyak kegiatan Pengabdian kepada Masyarakat yang bertujuan memberdayakan masyarakat desa Sampora ',
            'proof' => 'Perjanjian Kerja Sama No: 1652 /III/D-KJS.10.02/12/2019 ',
            'is_international' => mt_rand(0, 5) % 2 == 0,
            'is_national' => mt_rand(0, 5) % 2 == 0,
            'is_local' => mt_rand(0, 5) % 2 == 0,
            'start_at' => mt_rand(2015, 2030),
            'finish_at' => mt_rand(2015, 2030),
        ];
    }
}
