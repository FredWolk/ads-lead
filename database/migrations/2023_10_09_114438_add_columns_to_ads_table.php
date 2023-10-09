<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('ads', function (Blueprint $table) {
            $table->string('manager_image', 1023)->nullable();
            $table->string('manager_name', 255)->nullable();
            $table->string('manager_position', 255)->nullable();
            $table->string('manager_link', 255)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('ads', function (Blueprint $table) {
            $table->dropColumn(['manager_image', 'manager_name', 'manager_position', 'manager_link']);
        });
    }
};
