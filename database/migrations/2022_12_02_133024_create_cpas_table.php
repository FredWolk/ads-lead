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
        Schema::create('cpas', function (Blueprint $table) {
            $table->id();
            $table->string('name', 511);
            $table->string('link', 511);
            $table->string('pt_name', 511)->nullable();
            $table->text('image')->nullable();
            $table->text('pt_image')->nullable();
            $table->text('logo')->nullable();
            $table->text('prev_text')->nullable();
            $table->text('pt_prev_text')->nullable();

            $table->string('url', 511)->nullable();
            $table->integer('views')->default(0)->nullable();

            $table->string('main_verticales_id')->nullable();

            $table->string('verticales_id', 255)->nullable();
            $table->string('countries_id', 255)->nullable();
            $table->string('payment_models_id', 255)->nullable();
            $table->string('payment_schedule_id', 255)->nullable();
            $table->string('payment_systems_id', 255)->nullable();

            $table->text('before_main_text')->nullable();
            $table->text('pt_before_main_text')->nullable();

            $table->text('main_text')->nullable();
            $table->text('pt_main_text')->nullable();

            $table->string('date_of_creation', 255)->nullable();
            $table->string('geography_of_offers', 511)->nullable();
            $table->string('themes_of_offers', 511)->nullable();
            $table->string('inhaus_offers', 255)->nullable();
            $table->string('minimum_withdrawal_amount', 255)->nullable();
            $table->string('payment_methods', 511)->nullable();
            $table->string('payment_schedule', 511)->nullable();
            $table->string('referral_program', 255)->nullable();
            $table->text('tools')->nullable();

            $table->text('manager_image')->nullable();
            $table->string('manager_name', 255)->nullable();
            $table->string('manager_position', 255)->nullable();

            $table->string('facebook', 511)->nullable();
            $table->string('instagram', 511)->nullable();
            $table->string('linkedin', 511)->nullable();
            $table->string('forum_link', 511)->nullable();
            $table->text('editorial_opinion')->nullable();

            $table->integer('rating_support')->nullable();
            $table->integer('rating_payments')->nullable();
            $table->integer('rating_offers')->nullable();
            $table->integer('rating_betting')->nullable();

            $table->string('title', 511)->nullable();
            $table->text('description')->nullable();
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
        Schema::dropIfExists('cpas');
    }
};
