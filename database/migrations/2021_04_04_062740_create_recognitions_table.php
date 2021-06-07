<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecognitionsTable extends Migration
{
    public function up()
    {
        Schema::create('recognitions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('lecturer_id')->constrained()->onDelete('cascade');
            $table->string('proof');
            $table->string('specialty');
            $table->boolean('is_international')->default(false);
            $table->boolean('is_national')->default(false);
            $table->boolean('is_local')->default(false);
            $table->year('start_at');
            $table->year('finish_at');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('recognitions');
    }
}
