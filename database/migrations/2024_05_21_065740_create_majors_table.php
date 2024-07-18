<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMajorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('majors', function (Blueprint $table) {
            $table->id();
            $table->string('Name_Arabic')->nullable();
            $table->string('Name_English')->nullable();
            $table->unsignedBigInteger('College_ID')->nullable();
            $table->unsignedBigInteger('Degree_Level_ID')->nullable();
            $table->text('Description_Arabic')->nullable();
            $table->text('Description_English')->nullable();
            $table->string('Courses')->nullable();
            $table->string('Timetable')->nullable();
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
        Schema::dropIfExists('majors');
    }
}
