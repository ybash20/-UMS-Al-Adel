<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistrationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registrations', function (Blueprint $table) {
            $table->id();
            $table->string('Name')->nullable();
            $table->date('Date')->nullable();
            $table->boolean('Gender')->nullable();
            $table->string('Nationality', 30)->nullable();
            $table->date('DOB')->nullable();
            $table->string('Place_Of_Birth', 30)->nullable();
            $table->unsignedBigInteger('Marital_ID')->nullable();
            $table->unsignedBigInteger('Blood_ID')->nullable();
            $table->unsignedBigInteger('Address_ID')->nullable();
            $table->unsignedBigInteger('Identity_ID')->nullable();
            $table->string('Mobile_Phone_Number', 9)->nullable();
            $table->unsignedBigInteger('Major_ID')->nullable();
            $table->unsignedBigInteger('Certificate_ID')->nullable();
            $table->unsignedBigInteger('Qualification_ID')->nullable();
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
        Schema::dropIfExists('registrations');
    }
}
