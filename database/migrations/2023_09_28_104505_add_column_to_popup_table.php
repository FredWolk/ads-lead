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
        Schema::table('popups', function (Blueprint $table) {
            $table->string('hover_color')->nullable()->after('color_back');
            $table->string('hover_text_color')->nullable()->after('hover_color');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('popups', function (Blueprint $table) {
            $table->dropColumn('hover_color');
            $table->dropColumn('hover_text_color');
        });
    }
};
