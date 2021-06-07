<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCooperationsTable extends Migration
{
    public function up()
    {
        Schema::create('cooperations', function (Blueprint $table) {
            $table->id();
            $table->string('type')->nullable();
            $table->string('title');
            $table->string('benefit');
            $table->string('institution_name');
            $table->boolean('is_international');
            $table->boolean('is_national');
            $table->boolean('is_local');
            $table->year('start_at');
            $table->year('finish_at');
            $table->string('proof');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('cooperations');
    }
}
