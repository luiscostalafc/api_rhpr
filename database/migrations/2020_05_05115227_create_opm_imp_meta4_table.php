<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class OpmImpMeta4Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('OPM_IMP_META4', function (Blueprint $table) {
            $table->string('UNIDADE_META4', 20);
            $table->string('DESCRICAO_META4', 62)->nullable();
            $table->string('ID_PAI', 20)->nullable();
            $table->string('DESCRICAO_PAI', 180)->nullable();
            $table->string('UNIDADE_PMPR', 12)->nullable();
            $table->string('CD_LOCAL_TRABALHO', 20)->nullable();
            $table->string('LOCAL_TRABALHO', 180)->nullable();
            $table->timestamp('DATA_INICIO', 0)->nullable();
            $table->timestamp('DATA_FIM', 0)->nullable();
            $table->string('LOGRADOURO', 180)->nullable();
            $table->string('BAIRRO', 85)->nullable();
            $table->string('MUNICIPIO', 80)->nullable();
            $table->string('CEP', 20)->nullable();
            $table->string('DDD', 5)->nullable();
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
        Schema::dropIfExists('OPM_IMP_META4');
    }
}