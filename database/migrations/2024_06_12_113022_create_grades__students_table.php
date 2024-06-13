<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGradesStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grades__students', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('Student_ID')->nullable();
            $table->unsignedBigInteger('Course_ID')->nullable();
            $table->unsignedDouble('Grade_30')->nullable();
            $table->unsignedDouble('Grade_70')->nullable();
            $table->unsignedDouble('Grade_100')->nullable();
            $table->string('Spoint')->nullable();
            $table->string('Note')->nullable();
            $table->unsignedInteger('Turn')->nullable();
            $table->unsignedInteger('Semester')->nullable();
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
        Schema::dropIfExists('grades__students');
    }
}
