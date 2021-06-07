<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePkmsTable extends Migration
{
    public function up()
    {
        Schema::create('pkms', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('theme');
            $table->year('year');
            $table->string('integration_type')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('pkms');
    }
}
