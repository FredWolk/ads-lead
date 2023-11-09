<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('banner_asides', function (Blueprint $table) {
            $table->dropColumn('show');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('banner_asides', function (Blueprint $table) {
            $table->enum('show', ['all', 'cpa', 'ad'])->nullable();
        });
    }
};
