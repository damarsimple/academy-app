<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('nim');
            $table->string('name');
            $table->foreignId('studyprogram_id')->nullable();
            $table->boolean('is_active');
            $table->boolean('is_foreign');
            $table->boolean('is_fulltime');
            $table->boolean('is_graduated');
            $table->timestamp('graduated_at')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('students');
    }
}
