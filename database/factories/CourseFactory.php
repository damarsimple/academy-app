<?php

namespace Database\Factories;

use App\Models\Course;
use Illuminate\Database\Eloquent\Factories\Factory;

class CourseFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Course::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */

    private function randomFloat($min, $max)
    {
        return ($min + lcg_value() * (abs($max - $min)));
    }
    public function definition()
    {
        $names = ["Aljabar Linier", "Dasar Perancangan Sistem Kerja & Ergonomi", "Mekanika Teknik", "Statistik Industri I", "Praktikum Dasar", "Computer Aided Design (CAD) ", "Pemrograman Komputer", "Etika Rekayasa Teknik", "Analisis dan  Perancangan  Sistem Kerja & Ergonomi", "Material Teknik", "Manajemen Teknologi", "Statistik Industri II", "Penelitian Operasional I", "Perencanaan dan Pengendalian Produksi", "Praktikum Pemrograman Komputer", "Prak.  Perancangan  Sistem Kerja & Ergonomi", "Logika", "Enterprise Resource Planning", "Hukum Perburuhan dan Milik Perindustrian", "Elektronika Industri", "Proses Manufaktur", "Matematika Optimasi", "Penelitian Operasional II", "Sistem Produksi Ramping", "Praktikum Perencanaan dan Pengendalian Produksi", "Praktikum  Proses Manufaktur", "Enterpreneurship", "Psikologi Industri", "Perancangan Eksperimen", "Manajemen Pemasaran dan Hubungan Konsumen", "Analisis dan Perancangan Sistem Informasi", "Pengukuran dan Peningkatan Kinerja", "Sistem Otomasi Industri", "Organisasi dan Manajemen Perusahaan Industri", "Perencanaan dan Perancangan  Produk", "Praktikum Otomasi Industri", "Pemodelan Sistem", "Pengendalian dan Penjaminan Mutu", "Metodologi Penelitian Ilmiah", "Ekonomi Teknik", "Sistem Lingkungan Industri", "Manajemen Rantai Pasok", "Perencanaan Tata Letak Fasilitas", "Praktikum Analisis dan Perancangan Sistem Informasi", "Praktikum Perencanaan  Tata Letak Fasilitas", "Mata Kuliah Pilihan 1", "Mata Kuliah Pilihan 2", "Analisis dan Perancangan Perusahaan", "Manajemen Proyek Industri", "Keselamatan Kerja dan Hygiene Perusahaan", "Seminar", "Analisis Biaya", "Simulasi Industri", "Mata Kuliah Pilihan 3", "Mata Kuliah Pilihan 4", "Praktikum Inovasi", "Proyek Terpadu / Kerja Praktek / Kuliah Kerja Nyata", "Tugas Akhir", "Analisa Finansial", "Perilaku Organisasi", "Strategi Perusahaan", "Manajemen Logistik", "Sosiologi Industri", "Teori Organisasi Makro", "Sistem Penanganan Material", "Computer Aided Manufacturing (CAM)", "Teori Optimasi", "Sistem Perawatan", "Sistem Manusia Mesin", "Computer Integrated Manufacturing (CIM)", "Ergonomi Industri", "Ekonomi Industri", "Manajemen Kualitas", "Komunikasi Bisnis", "Multikulturalisme "];
        return [
            'name' => $names[array_rand($names)],
            'competency' => '',
            'code' => 'FTI ' . mt_rand(200, 300),
            'responsi_sks_weight' => $this->randomFloat(3.00, 4.00),
            'seminar_sks_weight' => $this->randomFloat(3.00, 4.00),
            'practice_sks_weight' => $this->randomFloat(3.00, 4.00),
            'credit_to_hours_conversion' => $this->randomFloat(3.00, 4.00),
            'must_attitude' => mt_rand(0, 10) > 5,
            'must_knowledge' => mt_rand(0, 10) > 5,
            'must_skills' => mt_rand(0, 10) > 5,
            'must_specialty_skills' => mt_rand(0, 10) > 5,
            'lesson_plan_document' => 'RPS',
            'organizing_unit' => 'PS'
        ];
    }
}
