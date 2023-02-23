<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeColumnsNullableToBlinkswagStoreUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('blinkswag_store_users', function (Blueprint $table) {
            $table->string('google_token')->nullable()->change();
            $table->string('google_refresh_token')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('blinkswag_store_users', function (Blueprint $table) {
            $table->dropColumn(['google_token', 'google_refresh_token']);
        });
    }
}
