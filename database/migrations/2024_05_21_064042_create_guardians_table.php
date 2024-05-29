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
            $table->string('Relationship', 30)->nullable();
            $table->string('Profession', 30)->nullable();
            $table->string('Workplace', 30)->nullable();
            $table->unsignedBigInteger('Address_ID')->nullable();
            $table->string('Phone_Number', 30)->nullable();
            $table->string('Landline_No', 30)->nullable();
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
