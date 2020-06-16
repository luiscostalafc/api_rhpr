<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ReservaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('RESERVA', function (Blueprint $table) {
            $table->string('UserRG', 20);
            $table->string('nome', 80)->nullable();
            $table->string('posto', 10)->nullable();
            $table->string('quadro', 10)->nullable();
            $table->string('subquadro', 15)->nullable();
            $table->timestamp('data', 0)->nullable();
            $table->unsignedBigInteger('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('RESERVA');
    }
}