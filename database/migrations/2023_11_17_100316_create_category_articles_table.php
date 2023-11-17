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
        Schema::create('category_articles', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('seo_text')->nullable();

            $table->string('title', 511)->nullable();
            $table->string('description', 1023)->nullable();
            $table->text('keywords')->nullable();
            $table->string('og_title', 511)->nullable();
            $table->string('og_description', 511)->nullable();
            $table->string('og_url', 511)->nullable();
            $table->string('og_image', 511)->nullable();
            $table->string('og_type', 511)->nullable();
            $table->text('meta_tags')->nullable();
            $table->text('og_tags')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('category_articles');
    }
};
