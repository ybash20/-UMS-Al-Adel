<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCertificatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('certificates', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('Qualification_ID')->nullable();
            $table->string('Name', 30)->nullable();
            $table->unsignedInteger('Graduation_Year')->nullable();
            $table->string('Disciplines', 30)->nullable();
            $table->unsignedInteger('Maximum_Pass_Grade')->nullable();
            $table->unsignedInteger('Total_Grades')->nullable();
            $table->unsignedInteger('Percentage')->nullable();
            $table->date('Issue_Date')->nullable();
            $table->string('Certificate')->nullable();
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
        Schema::dropIfExists('certificates');
    }
}
