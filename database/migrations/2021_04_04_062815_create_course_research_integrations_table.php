<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCourseResearchIntegrationsTable extends Migration
{
    public function up()
    {
        Schema::create('course_research_integrations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('research_id')->constrained()->onDelete('cascade');
            $table->foreignId('student_id')->constrained()->onDelete('cascade');
            $table->foreignId('course_id')->constrained()->onDelete('cascade');
            $table->string('integration_type');
            $table->year('year');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('course_research_integrations');
    }
}
