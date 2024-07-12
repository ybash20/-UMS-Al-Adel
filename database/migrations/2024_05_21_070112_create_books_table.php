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
            $table->string('Title')->nullable();
            $table->string('Author')->nullable();
            $table->unsignedInteger('Number_of_Page')->nullable();
            $table->text('Cover_Image')->nullable();
            $table->string('Edition', 30)->nullable();
            $table->unsignedBigInteger('Section_ID')->nullable();
            $table->date('Publication_year')->nullable();
            $table->string('Publisher')->nullable();
            $table->string('Language', 50)->nullable();
            $table->unsignedInteger('Quantity')->nullable();
            $table->text('Description')->nullable();
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
