<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contents', function (Blueprint $table) {
            $table->id();
            $table->text('Content_Arabic')->nullable();
            $table->text('Content_English')->nullable();
            $table->unsignedBigInteger('Category_ID')->nullable();
            $table->text('Description_Arabic')->nullable(); // Corrected spelling: "Arabic"
            $table->text('Description_English')->nullable(); // Corrected spelling: "English"
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
        Schema::dropIfExists('contents');
    }
}
