<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AusenciaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('AUSENCIA', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('NOME', 100)->nullable();
            $table->string('CODIGO', 62)->nullable();
            $table->string('RG', 22);
            $table->string('OPM_META4', 10)->nullable();
            $table->string('OPM_DESCRICAO', 62)->nullable();
            $table->string('COD_INCIDENTE', 9);
            $table->string('DESC_INCIDENTE', 254)->nullable();
            $table->integer('UNITS');
            $table->timestamp('DT_INIC', 0);
            $table->timestamp('DT_FIM', 0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('AUSENCIA');
    }
}