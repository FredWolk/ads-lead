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
        Schema::create('ad_comments', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->text('text');
            $table->integer('ad_id');
            $table->boolean('confirm');
            $table->integer('support')->default(0);
            $table->integer('traffic_quality')->default(0);
            $table->integer('number_geos')->default(0);
            $table->integer('price_click')->default(0);
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
        Schema::dropIfExists('ad_comments');
    }
};
