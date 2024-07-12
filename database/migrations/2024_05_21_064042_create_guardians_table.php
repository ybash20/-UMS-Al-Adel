<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGuardiansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guardians', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('Registration_ID')->nullable();
            $table->string('Name')->nullable();
            $table->string('Relationship')->nullable();
            $table->string('Profession')->nullable();
            $table->string('Workplace')->nullable();
            $table->unsignedBigInteger('Address_ID')->nullable();
            $table->string('Phone_Number', 13)->nullable();
            $table->string('Landline_No', 11)->nullable();
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
        Schema::dropIfExists('guardians');
    }
}
