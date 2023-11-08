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
        Schema::create('vacancies', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('link');
            $table->string('firma');
            $table->integer('salary');
            $table->string('location');
            $table->text('text');
            $table->boolean('is_top')->default(0); // 1 - top
            $table->string('linkedin')->nullable();
            $table->string('e_mail')->nullable();
            $table->string('telegram')->nullable();

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
        Schema::dropIfExists('vacancies');
    }
};
