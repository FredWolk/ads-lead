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
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string('name', 511);
            $table->string('link', 511);
            $table->enum('type', ['article', 'base'])->default('base');
            $table->string('pt_name', 511)->nullable();
            $table->string('image', 1023)->nullable();
            $table->string('pt_image', 1023)->nullable();
            $table->text('prev_text')->nullable();
            $table->text('pt_prev_text')->nullable();
            $table->integer('views')->default(0);
            $table->integer('author_id')->nullable();
            $table->json('tags')->nullable();
            $table->json('contents')->nullable();
            $table->json('pt_contents')->nullable();
            $table->json('for_whom')->nullable();
            $table->json('pt_for_whom')->nullable();
            $table->longText('main_text');
            $table->longText('pt_main_text')->nullable();

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
            $table->string('pt_title', 511)->nullable();
            $table->string('pt_description', 1023)->nullable();
            $table->text('pt_keywords')->nullable();
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
        Schema::dropIfExists('articles');
    }
};
