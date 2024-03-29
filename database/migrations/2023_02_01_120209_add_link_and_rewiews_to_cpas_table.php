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
        Schema::table('cpas', function (Blueprint $table) {
            $table->string('manager_link')->nullable();
            $table->text('pt_editorial_opinion')->nullable();
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
            $table->dropColumn('manager_link');
            $table->dropColumn('pt_editorial_opinion');
        });
    }
};
