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
            $table->string('Name');
            $table->date('Date');
            $table->boolean('Gender');
            $table->string('Nationality', 30);
            $table->date('DOB');
            $table->string('Place_Of_Birth', 30);
            $table->unsignedBigInteger('Marital_ID');
            $table->unsignedBigInteger('Blood_ID');
            $table->unsignedBigInteger('Address_ID');
            $table->unsignedBigInteger('Identity_ID');
            $table->string('Mobile_Phone_Number', 9);
            $table->unsignedBigInteger('Major_ID');
            $table->unsignedBigInteger('Certificate_ID');
            $table->unsignedBigInteger('Qualification_ID');
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
        Schema::dropIfExists('registrations');
    }
}
