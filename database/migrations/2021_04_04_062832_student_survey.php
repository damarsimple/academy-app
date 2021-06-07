<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class StudentSurvey extends Migration
{
    public function up()
    {
        Schema::create('student_survey', function (Blueprint $table) {
            $table->id();
            $table->foreignId('student_id')->constrained()->onDelete('cascade');
            $table->foreignId('survey_id')->constrained()->onDelete('cascade');
            $table->char('code');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('student_survey');
    }
}
