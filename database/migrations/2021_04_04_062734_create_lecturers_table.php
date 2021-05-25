<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLecturersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lecturers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('nidn');
            $table->string('doctor_degree')->nullable();
            $table->string('magister_degree')->nullable();
            $table->string('bachelor_degree')->nullable();
            $table->string('academic_job')->nullable();
            $table->string('specialty')->nullable();
            $table->string('education_certificate_number')->nullable();
            $table->string('certificate_competent_name')->nullable();
            $table->boolean('is_ps_competent')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lecturers');
    }
}
