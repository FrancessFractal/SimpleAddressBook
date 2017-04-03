<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MakeEmailAndPhoneNullable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /**
         * I realized I forgot to make the email and phone fields nullable. I realize I could have updated the
         * previous migration script since this project isn't exactly a production level project, but I wanted to see
         * how table alterations might work if it was necessary to do it as a migration.
         *
         * Turns out there's no way to alter columns without directly using SQL statements.
         * So much for that whole encapsulating the database thing.
         * Turns out you do need to get your hands dirty for even the most basic things.
         */
        DB::statement('ALTER TABLE `entries` MODIFY `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL;');
        DB::statement('ALTER TABLE `entries` MODIFY `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL;');

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        DB::statement('ALTER TABLE `entries` MODIFY `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL;');
        DB::statement('ALTER TABLE `entries` MODIFY `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL;');

    }
}
