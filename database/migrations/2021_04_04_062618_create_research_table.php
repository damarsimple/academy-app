<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResearchTable extends Migration
{
    public function up()
    {
        Schema::create('research', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('theme');
            $table->year('year');
            $table->longText('information')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('research');
    }
}
