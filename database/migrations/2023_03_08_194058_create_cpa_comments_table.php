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
        Schema::create('cpa_comments', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->text('text');
            $table->integer('cpa_id');
            $table->boolean('confirm');
            $table->integer('support')->default(0);
            $table->integer('payments')->default(0);
            $table->integer('offers')->default(0);
            $table->integer('betting')->default(0);
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
        Schema::dropIfExists('cpa_comments');
    }
};
