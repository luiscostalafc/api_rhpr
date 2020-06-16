<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DependentesInativoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('DEPENDENTES_INATIVO', function (Blueprint $table) {
            $table->string('RG', 50)->nullable();
            $table->string('nome', 80)->nullable();
            $table->string('sexo', 50)->nullable();
            $table->timestamp('data_nasc', 0)->nullable();
            $table->string('irpf', 50)->nullable();
            $table->string('parentesco', 50)->nullable();
            $table->timestamp('dt_ini', 0)->nullable();
            $table->timestamp('dt_fim', 0)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('DEPENDENTES_INATIVO');
    }
}