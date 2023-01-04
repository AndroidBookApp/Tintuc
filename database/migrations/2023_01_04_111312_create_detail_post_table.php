<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailPostTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_post', function (Blueprint $table) {
            $table->id();
            $table->foreign('post')->references('id')->on('post')->onDelete('cascade');
            $table->string('content');
            $table->date('create_at')->useCurrent();
            $table->date('update_at')->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detail_post');
    }
}
