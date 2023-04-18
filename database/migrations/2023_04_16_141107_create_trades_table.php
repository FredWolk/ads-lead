<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trades', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->enum('theme', ['Facebook', 'TikTok', 'Google Ads', 'Push and other advertising networks', 'AD-network blogs', 'FAQ', 'Payment solutions', 'Anti-detect browsers', 'Cloaking and Trackers', 'Proxy', 'Domains & Hosting', 'SPY Services', 'Creatives', 'Jobs/Job', 'Buy/Sell', 'Floodlight', 'Humor']);
            $table->string('title');
            $table->enum('prefix', ['', 'Case', 'Question', 'Testimonial', 'Update', 'Manual', 'Creatives', 'Review', 'Lifecycle', 'Manual', 'Parsing', 'Training', 'Beginners', 'New']);
            $table->json('tags')->nullable();
            $table->longText('content');
            $table->integer('views')->default(0);
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
        Schema::dropIfExists('trades');
    }
};
