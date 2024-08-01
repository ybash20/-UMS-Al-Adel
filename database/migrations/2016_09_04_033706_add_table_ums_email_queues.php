<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddTableUmsEmailQueues extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ums_email_queues', function (Blueprint $table) {
            $table->increments('id');

            $table->dateTime('send_at')->nullable();
            $table->string('email_recipient')->nullable();
            $table->string('email_from_email')->nullable();
            $table->string('email_from_name')->nullable();
            $table->string('email_cc_email')->nullable();
            $table->string('email_subject')->nullable();
            $table->text('email_content')->nullable();
            $table->text('email_attachments')->nullable();
            $table->boolean('is_sent')->nullable();

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
        Schema::drop('ums_email_queues');
    }
}
