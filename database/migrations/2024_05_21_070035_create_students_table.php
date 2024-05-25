<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('Name');
            $table->unsignedBigInteger('Major_ID');
            $table->unsignedBigInteger('Level_ID');
            $table->string('Code');
            $table->boolean('Gender');
            $table->date('DOB');
            $table->string('Email');
            $table->string('Phone_number');
            $table->unsignedBigInteger('Address_ID');
            $table->string('Status');
            $table->boolean('Not_Allowed_Show');
            $table->string('Notes');
            $table->string('Photo');
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
        Schema::dropIfExists('students');
    }
}
