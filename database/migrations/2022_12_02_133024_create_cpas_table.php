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
            $table->string('pt_name', 511);
            $table->string('image', 1023);
            $table->string('logo', 1023);
            $table->string('prev_text', 2047);
            $table->string('pt_prev_text', 2047);
            $table->string('url', 2047);
            $table->integer('views', 11)->default(0);
            $table->integer('author_id', 11);
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
            $table->string('geography_of_offers:', 511);
            $table->string('themes_of_offers:', 1023);
            $table->string('inhaus_offers:', 255);
            $table->string('minimum_withdrawal_amount:', 255);
            $table->string('payment_methods:', 511);
            $table->string('payment_schedule:', 511);
            $table->string('referral_program:', 255);
            $table->string('tools:', 1023);

            $table->string('manager_image', 1023);
            $table->string('manager_name', 511);
            $table->string('manager_position', 511);

            $table->string('facebook', 1023);
            $table->string('instagram', 1023);
            $table->string('linkedin', 1023);
            $table->string('forum_link', 1023);
            $table->text('editorial_opinion');
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
