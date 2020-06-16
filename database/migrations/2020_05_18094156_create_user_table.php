<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('rg');
            $table->string('cpf');
            $table->string('workplace');
            $table->string('password');
            $table->unsignedBigInteger('strikes')->default(0);
            $table->boolean('blocked')->default(false);
            $table->boolean('reset')->default(true);
            $table->timestamps();
            $table->softDeletes('deleted_at', 0);
            $table->unsignedBigInteger('system_id');

            $table->foreign('system_id')->references('id')->on('systems')->onDelete('cascade');
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