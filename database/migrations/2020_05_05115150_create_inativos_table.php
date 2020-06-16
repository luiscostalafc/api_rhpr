<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class InativosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('INATIVOS', function (Blueprint $table) {
            $table->string('STD_ID_HR', 255)->nullable();
            $table->unsignedBigInteger('STD_OR_RH_PERIOD')->nullable();
            $table->timestamp('DT_INI_RH', 0)->nullable();
            $table->string('ID_TIPO_RH', 255)->nullable();
            $table->string('N_TIPO_RH', 255)->nullable();
            $table->string('CBR_NUM_RG', 255)->nullable();
            $table->string('NOME', 255)->nullable();
            $table->timestamp('DT_NASC', 0)->nullable();
            $table->string('SEXO', 255)->nullable();
            $table->string('cargo', 50)->nullable();
            $table->string('POSTO', 255)->nullable();
            $table->string('N_RUA', 255)->nullable();
            $table->string('N_TIPO_LOCAL_END', 255)->nullable();
            $table->string('QUADRO', 255)->nullable();
            $table->unsignedBigInteger('ORD_FONE')->nullable();
            $table->string('N_TIPO_LOCAL_FONE', 255)->nullable();
            $table->string('N_TIPO_LINHA', 255)->nullable();
            $table->string('FONE', 255)->nullable();
            $table->string('END_LOGRADOURO', 255)->nullable();
            $table->string('END_NUMERO', 255)->nullable();
            $table->string('END_COMPL', 255)->nullable();
            $table->string('END_BAIRRO', 255)->nullable();
            $table->string('END_CIDADE', 255)->nullable();
            $table->string('END_CEP', 255)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('INATIVOS');
    }
}