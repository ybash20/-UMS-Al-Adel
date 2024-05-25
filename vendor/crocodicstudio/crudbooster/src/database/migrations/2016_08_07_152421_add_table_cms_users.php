<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddTableCmsUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cms_users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable();
            $table->string('Username');
            $table->boolean('Gender');
            $table->string('password')->nullable();
            $table->date('DOB');
            $table->unsignedBigInteger('Department_ID');
            $table->string('email')->nullable();
            $table->string('Address_ID');
            $table->string('Phone_number', 30);
            $table->string('photo')->nullable();
            $table->string('Status', 30);
            $table->integer('id_cms_privileges')->nullable();
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
        Schema::drop('cms_users');
    }
}
