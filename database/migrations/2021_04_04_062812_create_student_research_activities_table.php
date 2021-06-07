<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentResearchActivitiesTable extends Migration
{
    public function up()
    {
        Schema::create('student_research_activities', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->year('year');
            $table->foreignId('student_id')->constrained()->onDelete('cascade');
            $table->foreignId('research_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('student_research_activities');
    }
}
