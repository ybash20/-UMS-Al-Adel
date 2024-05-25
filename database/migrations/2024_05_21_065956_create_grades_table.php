<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGradesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grades', function (Blueprint $table) {
            $table->unsignedBigInteger('Student_ID');
            $table->unsignedBigInteger('Course_ID');
            $table->unsignedInteger('Grade_30');
            $table->unsignedInteger('Grade_70');
            $table->unsignedInteger('Grade_100');
            $table->string('Spoint');
            $table->string('Note');
            $table->unsignedInteger('Turn');
            $table->unsignedInteger('Semester');
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
        Schema::dropIfExists('grades');
    }
}
