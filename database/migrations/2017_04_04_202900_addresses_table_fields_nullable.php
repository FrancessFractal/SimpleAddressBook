<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddressesTableFieldsNullable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement('ALTER TABLE `addresses` MODIFY `line2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL;');
        DB::statement('ALTER TABLE `addresses` MODIFY `county` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL;');
        DB::statement('ALTER TABLE `addresses` MODIFY `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL;');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement('UPDATE `addresses` SET `line2`="" WHERE `line2` IS NULL');
        DB::statement('UPDATE `addresses` SET `county`="" WHERE `county` IS NULL');
        DB::statement('UPDATE `addresses` SET `country`="" WHERE `country` IS NULL');
        DB::statement('ALTER TABLE `addresses` MODIFY `line2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL;');
        DB::statement('ALTER TABLE `addresses` MODIFY `county` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL;');
        DB::statement('ALTER TABLE `addresses` MODIFY `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL;');
    }
}
