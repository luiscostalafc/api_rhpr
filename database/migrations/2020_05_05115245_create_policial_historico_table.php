<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PolicialHistoricoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('POLICIAL_HISTORICO', function (Blueprint $table) {
            $table->unsignedBigInteger('SK_POLICIAL_HISTORICO')->nullable();
            $table->string('ID_META4', 18);
            $table->unsignedBigInteger('STD_OR_HR_PERIOD');
            $table->timestamp('DATA_ADMISSAO', 0)->nullable();
            $table->string('NOME', 100)->nullable();
            $table->string('RG', 30)->nullable();
            $table->string('CLASSE', 10)->nullable();
            $table->timestamp('NASCIMENTO', 0)->nullable();
            $table->unsignedBigInteger('ID_SEXO')->nullable();
            $table->string('SEXO', 30)->nullable();
            $table->timestamp('ADMISSAO_REAL', 0)->nullable();
            $table->string('EMAIL_META4', 100)->nullable();
            $table->string('FUNCAO', 120)->nullable();
            $table->string('CARGO', 60)->nullable();
            $table->string('QUADRO', 30)->nullable();
            $table->string('SUBQUADRO', 20)->nullable();
            $table->timestamp('PROMOCAO', 0)->nullable();
            $table->string('REFERENCIA', 10)->nullable();
            $table->string('BAIRRO', 100)->nullable();
            $table->string('CIDADE', 80)->nullable();
            $table->string('OPM_DESCRICAO', 80)->nullable();
            $table->string('OPM_META4', 30)->nullable();
            $table->string('CDOPM', 10)->nullable();
            $table->timestamp('dh_inicio', 0)->nullable();
            $table->timestamp('dh_fim', 0)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('POLICIAL_HISTORICO');
    }
}