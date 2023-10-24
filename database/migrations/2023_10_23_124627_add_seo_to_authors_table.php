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
        Schema::table('authors', function (Blueprint $table) {
            $table->string('link', 511)->nullable()->after('photo');
            $table->string('title', 511)->nullable()->after('link');
            $table->string('description', 1023)->nullable()->after('title');
            $table->text('keywords')->nullable()->after('description');
            $table->string('og_title', 511)->nullable()->after('keywords');
            $table->string('og_description', 511)->nullable()->after('og_title');
            $table->string('og_url', 511)->nullable()->after('og_description');
            $table->string('og_image', 511)->nullable()->after('og_url');
            $table->string('og_type', 511)->nullable()->after('og_image');
            $table->text('meta_tags')->nullable()->after('og_type');
            $table->text('og_tags')->nullable()->after('meta_tags');
            $table->text('seo_text')->nullable()->after('og_tags');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('authors', function (Blueprint $table) {
            $table->dropColumn(['title',
                'description',
                'keywords',
                'og_title',
                'og_description',
                'og_url',
                'og_image',
                'og_type',
                'meta_tags',
                'og_tags',
                'seo_text',
                'link'
            ]);
        });
    }
};
