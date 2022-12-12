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
        Schema::create('ads', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255);
            $table->string('link', 255);
            $table->string('pt_name', 255)->nullable();
            $table->text('image')->nullable();
            $table->text('logo')->nullable();
            $table->text('prev_text')->nullable();
            $table->text('pt_prev_text')->nullable();
            $table->string('url', 511)->nullable();
            $table->integer('views')->default(0)->nullable();
            $table->string('advertising_formats', 255)->nullable();
            $table->string('countries', 255)->nullable();
            $table->string('payment_systems', 255)->nullable();
            $table->string('minimum_top_up_amount', 255)->nullable();
            $table->text('before_main_text')->nullable();
            $table->text('pt_before_main_text')->nullable();
            $table->text('main_text')->nullable();
            $table->text('pt_main_text')->nullable();
            $table->string('promocode')->nullable()->nullable();

            $table->string('date_of_creation', 255)->nullable();
            $table->string('traffic_volume_per_month', 511)->nullable();
            $table->text('formats')->nullable();
            $table->string('forbidden_subjects', 255)->nullable();
            $table->string('average_click_price', 255)->nullable();
            $table->string('top_up_methods', 511)->nullable();
            $table->string('minimum_deposit', 511)->nullable();
            $table->string('referral_program', 255)->nullable();
            $table->text('tools')->nullable()->nullable();

            $table->string('facebook', 511)->nullable();
            $table->string('instagram', 511)->nullable();
            $table->string('linkedin', 511)->nullable();
            $table->string('forum_link', 511)->nullable();
            $table->text('editorial_opinion')->nullable()->nullable();

            $table->integer('rating_support')->nullable();
            $table->integer('rating_traffic_quality')->nullable();
            $table->integer('rating_number_of_geos')->nullable();
            $table->integer('rating_price_per_click')->nullable();

            $table->string('title', 511)->nullable();
            $table->string('description', 1023)->nullable();
            $table->text('keywords')->nullable();
            $table->string('og_title', 511)->nullable();
            $table->string('og_description', 511)->nullable();
            $table->string('og_url', 511)->nullable();
            $table->string('og_image', 511)->nullable();
            $table->string('og_type', 511)->nullable();
            $table->text('meta_tags')->nullable()->nullable();
            $table->text('og_tags')->nullable()->nullable();
            $table->string('pt_title', 511)->nullable();
            $table->string('pt_description', 1023)->nullable();
            $table->text('pt_keywords')->nullable();
            $table->string('pt_og_title', 511)->nullable();
            $table->string('pt_og_description', 511)->nullable();
            $table->string('pt_og_url', 511)->nullable();
            $table->string('pt_og_image', 511)->nullable();
            $table->string('pt_og_type', 511)->nullable();
            $table->text('pt_meta_tags')->nullable()->nullable();
            $table->text('pt_og_tags')->nullable()->nullable();

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
        Schema::dropIfExists('ads');
    }
};
