<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEntriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entries', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email');

            /**
             * phone is a string instead of an integer because any leading zeros in phone numbers are still relevant.
             * validation, including length, is expected to happen elsewhere, so length is not specified here
             * in MySQL varchars of length <= 255 take the same space, so it is not necessary to limit it beyond that.
             */
            $table->string('phone');
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
        Schema::dropIfExists('entries');
    }
}
