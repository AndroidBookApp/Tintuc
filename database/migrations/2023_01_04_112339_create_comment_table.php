<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comment', function (Blueprint $table) {
            $table->id();
            $table->foreign('user')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('post')->references('id')->on('post')->onDelete('cascade');
            $table->string('content');
            $table->integer('repComment');
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
        Schema::dropIfExists('comment');
    }
}
