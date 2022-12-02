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
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string('name', 511);
            $table->string('pt_name', 511);
            $table->string('image', 1023);
            $table->integer('views', 11)->default(0);
            $table->integer('author_id', 11);
            $table->text('tags');
            $table->text('contents');
            $table->text('pt_contents');
            $table->text('for_whom');
            $table->text('pt_for_whom');
            $table->text('main_text');
            $table->text('pt_main_text');
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
        Schema::dropIfExists('articles');
    }
};
