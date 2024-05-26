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
            $table->unsignedBigInteger('Qualification_ID');
            $table->string('Name', 30);
            $table->unsignedInteger('Graduation_Year');
            $table->string('Disciplines', 30);
            $table->unsignedInteger('Maximum_Pass_Grade');
            $table->unsignedInteger('Total_Grades');
            $table->unsignedInteger('Percentage');
            $table->date('Issue_Date');
            $table->string('Certificate');
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
