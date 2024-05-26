<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateNullableUmsApicustom extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('ums_apicustom', function (Blueprint $table) {
            $table->string('permalink')->nullable()->change();
            $table->string('tabel')->nullable()->change();
            $table->string('aksi')->nullable()->change();
            $table->string('kolom')->nullable()->change();
            $table->string('orderby')->nullable()->change();
            $table->string('sub_query_1')->nullable()->change();
            $table->string('sql_where')->nullable()->change();
            $table->string('nama')->nullable()->change();
            $table->string('keterangan')->nullable()->change();
            $table->string('parameter')->nullable()->change();
            $table->string('method_type', 25)->nullable();
            $table->longText('parameters')->nullable();
            $table->longText('responses')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('ums_settings', function (Blueprint $table) {
            //
        });
    }
}
