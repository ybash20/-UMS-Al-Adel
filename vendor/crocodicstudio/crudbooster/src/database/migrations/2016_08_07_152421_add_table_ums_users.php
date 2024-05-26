<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddTableUmsUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ums_users', function (Blueprint $table) {
            $table->increments('id');

            $table->string('name')->nullable();
            $table->string('Username')->nullable();
            $table->boolean('Gender')->nullable();
            $table->string('password')->nullable();
            $table->date('DOB')->nullable();
            $table->unsignedBigInteger('Department_ID')->nullable();
            $table->string('email')->nullable();
            $table->string('Address_ID')->nullable();
            $table->string('Phone_number', 30)->nullable();
            $table->string('photo')->nullable();
            $table->string('Status', 50)->nullable();
            $table->unsignedBigInteger('id_ums_privileges')->nullable();
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
        Schema::drop('ums_users');
    }
}
