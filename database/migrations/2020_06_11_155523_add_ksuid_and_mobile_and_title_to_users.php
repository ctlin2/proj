<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddKsuidAndMobileAndTitleToUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('ksuid', 15)->nullable();
            $table->string('mobile', 20)->nullable();
            $table->string('title', 50)->nullable();
            $table->string('line_user_id')->nullable(); 
            $table->timestamp('line_timestamp')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['ksuid', 'mobile', 'title', 'line_user_id', 'line_timestamp']);
        });
    }
}
