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
            $table->dropColumn([
                'pt_name',
                'pt_image',
                'pt_prev_text',
                'pt_before_main_text',
                'pt_main_text',
                'pt_promocode_desc',
                'pt_title',
                'pt_description',
                'pt_keywords',
                'pt_og_title',
                'pt_og_description',
                'pt_og_url',
                'pt_og_image',
                'pt_og_type',
                'pt_meta_tags',
                'pt_og_tags',
            ]);
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
            //
        });
    }
};
