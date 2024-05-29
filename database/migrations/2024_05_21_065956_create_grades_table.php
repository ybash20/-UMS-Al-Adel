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
            $table->unsignedBigInteger('Student_ID')->nullable();
            $table->unsignedBigInteger('Course_ID')->nullable();
            $table->unsignedInteger('Grade_30')->nullable();
            $table->unsignedInteger('Grade_70')->nullable();
            $table->unsignedInteger('Grade_100')->nullable();
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
        Schema::dropIfExists('grades');
    }
}
