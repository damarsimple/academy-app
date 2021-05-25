<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCourseResearchIntegrationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course_research_integrations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('research_id')->constrained();
            $table->foreignId('student_id')->constrained();
            $table->foreignId('course_id')->constrained();
            $table->string('integration_type');
            $table->year('year');
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
        Schema::dropIfExists('course_research_integrations');
    }
}
