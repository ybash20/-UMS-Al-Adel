<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('Title', 50);
            $table->string('Author', 50);
            $table->unsignedInteger('Number_of_Page');
            $table->string('Cover_Image');
            $table->string('Edition', 30);
            $table->unsignedBigInteger('Section_ID');
            $table->unsignedInteger('Publication_year');
            $table->string('Publisher', 50);
            $table->string('Language', 50);
            $table->unsignedInteger('Quantity');
            $table->string('Description');
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
        Schema::dropIfExists('books');
    }
}
