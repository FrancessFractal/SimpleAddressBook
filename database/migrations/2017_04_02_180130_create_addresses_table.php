<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addresses', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('entry_id')->unsigned();
            $table->string('line1');
            $table->string('line2');
            $table->string('town');
            $table->string('county');
            $table->string('postal', 10);
            $table->string('country');
            $table->timestamps();

        });

        Schema::table('addresses', function (Blueprint $table) {

            $table->foreign('entry_id')
                ->references('id')->on('entries')
                ->onDelete('cascade');

        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('addresses');
    }
}
