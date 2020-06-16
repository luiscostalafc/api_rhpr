<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class OpmPmprTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('opmPMPR', function (Blueprint $table) {
            $table->string('META4', 20);
            $table->string('NOME_META4', 255)->nullable();
            $table->string('CODIGO', 10)->nullable();
            $table->string('DESCRICAO', 255)->nullable();
            $table->string('ABREVIATURA', 255)->nullable();
            $table->string('TIPO', 255)->nullable();
            $table->string('MUNICIPIO', 255)->nullable();
            $table->string('CDMUNICIPIO', 20)->nullable();
            $table->string('TITULO', 255)->nullable();
            $table->string('CODIGOBASE', 10)->nullable();
            $table->string('CODIGONOVO', 10)->nullable();
            $table->string('TELEFONE', 40)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('opmPMPR');
    }
}