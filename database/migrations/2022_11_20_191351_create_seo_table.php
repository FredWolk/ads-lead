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
        Schema::create('seo', function (Blueprint $table) {
            $table->id();
            $table->string('h1', 255)->nullable();
            $table->string('pt_h1', 255)->nullable();
            $table->text('after_h1_text')->nullable();
            $table->text('pt_after_h1_text')->nullable();

            $table->string('page', 255);
            $table->boolean('status')->default(1);
            $table->text('seo_text')->nullable();
            $table->text('pt_seo_text')->nullable();

            $table->string('title', 511)->nullable();
            $table->string('description', 1023)->nullable();
            $table->string('keywords', 2047)->nullable();
            $table->string('og_title', 511)->nullable();
            $table->string('og_description', 511)->nullable();
            $table->string('og_url', 511)->nullable();
            $table->string('og_image', 511)->nullable();
            $table->string('og_type', 511)->nullable();
            $table->text('meta_tags')->nullable();
            $table->text('og_tags')->nullable();
            $table->string('pt_title', 511)->nullable();
            $table->string('pt_description', 1023)->nullable();
            $table->string('pt_keywords', 2047)->nullable();
            $table->string('pt_og_title', 511)->nullable();
            $table->string('pt_og_description', 511)->nullable();
            $table->string('pt_og_url', 511)->nullable();
            $table->string('pt_og_image', 511)->nullable();
            $table->string('pt_og_type', 511)->nullable();
            $table->text('pt_meta_tags')->nullable();
            $table->text('pt_og_tags')->nullable();

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('seo');
    }
};
