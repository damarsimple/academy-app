<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentSelectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_selections', function (Blueprint $table) {
            $table->id();
            $table->year('year');
            $table->foreignId('student_id')->constrained()->onDelete('cascade');
            $table->boolean('is_accepted');
            $table->boolean('is_regular');
            $table->boolean('is_transfer');
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
        Schema::dropIfExists('student_selections');
    }
}
