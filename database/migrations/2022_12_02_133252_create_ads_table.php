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
            $table->string('name', 511);
            $table->string('link', 511);
            $table->string('pt_name', 511);
            $table->text('image');
            $table->text('logo');
            $table->text('prev_text');
            $table->text('pt_prev_text');
            $table->string('url', 511);
            $table->integer('views')->default(0);
            $table->string('verticales_id', 255);
            $table->string('countries_id', 255);
            $table->string('payment_models_id', 255);
            $table->string('payment_schedule_id', 255);
            $table->string('payment_systems_id', 255);
            $table->text('before_main_text');
            $table->text('pt_before_main_text');
            $table->text('main_text');
            $table->text('pt_main_text');

            $table->string('date_of_creation', 255);
            $table->string('traffic_volume_per_month', 511);
            $table->text('formats');
            $table->string('forbidden_subjects', 255);
            $table->string('average_click_price', 255);
            $table->string('top_up_methods', 511);
            $table->string('minimum_deposit', 511);
            $table->string('referral_program', 255);
            $table->text('tools');

            $table->string('facebook', 511);
            $table->string('instagram', 511);
            $table->string('linkedin', 511);
            $table->string('forum_link', 511);
            $table->text('editorial_opinion');

            $table->integer('rating_support')->default(0);
            $table->integer('rating_payments')->default(0);
            $table->integer('rating_offers')->default(0);
            $table->integer('rating_betting')->default(0);

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
