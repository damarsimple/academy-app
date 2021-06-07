<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('competency');
            $table->string('code');
            $table->float('responsi_sks_weight');
            $table->float('seminar_sks_weight');
            $table->float('practice_sks_weight');
            $table->float('credit_to_hours_conversion');
            $table->boolean('must_attitude')->default(false);
            $table->boolean('must_knowledge')->default(false);
            $table->boolean('must_skills')->default(false);
            $table->boolean('must_specialty_skills')->default(false);
            $table->string('lesson_plan_document');
            $table->string('organizing_unit');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('courses');
    }
}
