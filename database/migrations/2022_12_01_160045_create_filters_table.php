<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
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
        Schema::create('filters', function (Blueprint $table) {
            $table->id();
            $table->text('vertical')->nullable();
            $table->text('countries')->nullable();
            $table->text('payment_models')->nullable();
            $table->text('payment_schedule')->nullable();
            $table->text('payment_systems')->nullable();
            $table->text('advertising_formats')->nullable();
            $table->text('minimum_top_up_amount')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });

        DB::table('filters')->insert([
            'vertical' => '[]',
            'countries' => '[]',
            'payment_models' => '[]',
            'payment_schedule' => '[]',
            'payment_systems' => '[]',
            'advertising_formats' => '[]',
            'minimum_top_up_amount' => '[]',
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('filters');
    }
};
