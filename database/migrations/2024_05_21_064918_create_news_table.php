<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->id();
            $table->string('Title_Arabic')->nullable();
            $table->string('Title_English')->nullable();
            $table->text('Article_Arabic')->nullable();
            $table->text('Article_English')->nullable();
            $table->string('Author', 30)->nullable();
            $table->date('Publication_date')->nullable();
            $table->unsignedBigInteger('Category_ID')->nullable();
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
        Schema::dropIfExists('news');
    }
}
