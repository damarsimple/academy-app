<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAchievementsTable extends Migration
{
    public function up()
    {
        Schema::create('achievements', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->boolean('is_local');
            $table->boolean('is_national');
            $table->boolean('is_international');
            $table->boolean('is_academic');
            $table->longText('description');
            $table->timestamp('start_at')->nullable();
            $table->timestamp('start_at')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('achievements');
    }
}
