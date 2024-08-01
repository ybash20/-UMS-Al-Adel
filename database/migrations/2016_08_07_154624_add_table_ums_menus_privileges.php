<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddTableUmsMenusPrivileges extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ums_menus_privileges', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_ums_menus')->nullable();
            $table->integer('id_ums_privileges')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('ums_menus_privileges');
    }
}
