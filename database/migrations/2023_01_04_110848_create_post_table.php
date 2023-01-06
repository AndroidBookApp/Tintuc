<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('rootImage');
            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')->references('id')->on('category')->onDelete('cascade');
            $table->string('shortDescription')->nullable();
            $table->boolean('domestic')->default(false);
            $table->date('create_at')->default(getdate());
            $table->date('update_at')->default(getdate());
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('post');
    }
}
