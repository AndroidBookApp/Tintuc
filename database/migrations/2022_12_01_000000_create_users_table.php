<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('username')->unique();
            $table->string('password');
            $table->string('email')->unique();
            $table->string('sdt')->unique()->nullable();
            $table->string('ngaysinh')->nullable();
            $table->boolean('is_active')->default(true);
            $table->boolean('is_admin')->default(true);
            $table->date('create_at')->useCurrent();
            $table->date('last_login');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
