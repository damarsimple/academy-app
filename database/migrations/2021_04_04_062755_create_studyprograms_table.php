<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudyprogramsTable extends Migration
{
    public function up()
    {
        Schema::create('studyprograms', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->string('name');
            $table->string('accreditation');
            $table->string('code');
            $table->timestamp('expired_at');
            $table->foreignId('lecturer_id')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('studyprograms');
    }
}
