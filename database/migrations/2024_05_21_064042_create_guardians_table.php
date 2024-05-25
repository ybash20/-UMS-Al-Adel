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
            $table->unsignedBigInteger('Registration_ID');
            $table->string('Name');
            $table->string('Relationship', 30);
            $table->string('Profession', 30);
            $table->string('Workplace', 30);
            $table->unsignedBigInteger('Address_ID');
            $table->string('Phone_No.', 30);
            $table->string('Landline_No', 30);
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
