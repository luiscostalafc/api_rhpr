<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class LogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::connection('mongodb')->hasTable('logs')) {
            Schema::connection('mongodb')->create('logs', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->string('rg');
                $table->string('name');
                $table->string('ip');
                $table->string('url');
                $table->string('query');
                $table->integer('status_request');
                $table->timestamp('created_at', 0)->useCurrent();
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('logs');
    }
}