<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddTableUmsDashboard extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ums_dashboard', function (Blueprint $table) {
            $table->increments('id');

            $table->string('name')->nullable();
            $table->integer('id_ums_privileges')->nullable();
            $table->longtext('content')->nullable();

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
        Schema::drop('ums_dashboard');
    }
}
