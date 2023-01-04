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
        Schema::table('cpas', function (Blueprint $table) {
            $table->boolean('is_top')->nullable();
            $table->boolean('is_main')->nullable();
            $table->boolean('is_recomendated')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cpas', function (Blueprint $table) {
            $table->dropColumn('is_top');
            $table->dropColumn('is_main');
            $table->dropColumn('is_recomendated');
        });
    }
};
