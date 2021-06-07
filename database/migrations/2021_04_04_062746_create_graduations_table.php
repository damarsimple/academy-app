<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGraduationsTable extends Migration
{
    public function up()
    {
        Schema::create('graduations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('student_id')->constrained()->onDelete('cascade');
            $table->boolean('has_job')->default(false);
            $table->timestamp('has_job_at')->nullable();
            $table->boolean('is_job_related');
            $table->string('job_type')->nullable();
            $table->year('year');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('graduations');
    }
}
