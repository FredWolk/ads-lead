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
            $table->string('pt_name', 511);
            $table->string('image', 1023);
            $table->string('logo', 1023);
            $table->text('prev_text');
            $table->text('pt_prev_text');
            $table->string('url', 1023);
            $table->integer('views')->default(0);
            $table->integer('author_id');
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

            $table->string('facebook', 1023);
            $table->string('instagram', 1023);
            $table->string('linkedin', 1023);
            $table->string('forum_link', 1023);
            $table->text('editorial_opinion');

            $table->integer('rating_support')->default(0);
            $table->integer('rating_payments')->default(0);
            $table->integer('rating_offers')->default(0);
            $table->integer('rating_betting')->default(0);

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
