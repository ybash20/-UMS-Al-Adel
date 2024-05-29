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
            $table->string('Name')->nullable();
            $table->unsignedBigInteger('Major_ID')->nullable();
            $table->unsignedBigInteger('Level_ID')->nullable();
            $table->string('Code')->nullable();
            $table->boolean('Gender')->nullable();
            $table->date('DOB')->nullable();
            $table->string('Email')->nullable();
            $table->string('Phone_number')->nullable();
            $table->unsignedBigInteger('Address_ID')->nullable();
            $table->string('Status')->nullable();
            $table->boolean('Not_Allowed_Show')->nullable();
            $table->string('Notes')->nullable();
            $table->string('Photo')->nullable();
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
