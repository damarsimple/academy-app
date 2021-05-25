<?php

namespace Database\Factories;

use App\Models\Studyprogram;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

class StudyprogramFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Studyprogram::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $names = [
            "S1 Teknik Mesin",
            "S1 Teknik Elektro",
            "S1 Teknik Industri",
            "S1 Sistem Informasi",
            "Profesi Insinyur",     
            "S2 Teknik Mesin ",
            "S2 Teknik Elektro",
            "S3 Weaboisme"
        ];
        return [
            'name' => $names[array_rand($names)],
            'type' => 'Tehnik',
            'accreditation' => 'A',
            'code' => '1133/SK/BANPT/Akred/S/X/2015',
            'expired_at' => Carbon::createFromDate(mt_rand(2020, 2025), mt_rand(1, 12), mt_rand(0, 20)),
        ];
    }
}
