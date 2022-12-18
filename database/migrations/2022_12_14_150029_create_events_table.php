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
        Schema::create('events', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->string('link');
            $table->string('pt_name')->nullable();
            $table->enum('type', ['meetup', 'preparty', 'afterparty', 'conference']);
            $table->string('location')->nullable();
            $table->string('pt_location')->nullable();
            $table->string('organizer')->nullable();
            $table->string('date')->nullable();
            $table->string('pt_date')->nullable();
            $table->text('image')->nullable();
            $table->text('pt_image')->nullable();
            $table->text('content')->nullable();
            $table->text('pt_content')->nullable();

            $table->string('form_date')->nullable();
            $table->string('pt_form_date')->nullable();
            $table->string('form_location')->nullable();
            $table->string('pt_form_location')->nullable();
            $table->text('form_social')->nullable();
            $table->string('form_site')->nullable();

            $table->date('filtration_date')->nullable();

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

            $table->softDeletes();

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
        Schema::dropIfExists('events');
    }
};
