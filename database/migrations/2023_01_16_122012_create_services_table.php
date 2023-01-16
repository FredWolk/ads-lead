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
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255);
            $table->string('pt_name', 255)->nullable();
            $table->text('logo')->nullable();
            $table->text('prev_text')->nullable();
            $table->text('pt_prev_text')->nullable();
            $table->string('url', 511)->nullable();
            $table->boolean('is_recomendated')->nullable();

            $table->string('promocode')->nullable();
            $table->text('promocode_desc')->nullable();
            $table->text('pt_promocode_desc')->nullable();

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
        Schema::dropIfExists('services');
    }
};
