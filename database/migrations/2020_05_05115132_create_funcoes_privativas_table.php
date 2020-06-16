<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class FuncoesPrivativasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('FUNCOES_PRIVATIVAS', function (Blueprint $table) {
            $table->string('CBR_ID_FUNC_PRIV', 10)->nullable();
            $table->timestamp('DT_START', 0)->nullable();
            $table->timestamp('DT_END', 0)->nullable();
            $table->string('CBR_ID_FUNC', 10)->nullable();
            $table->string('STD_ID_JOB_CODE', 10)->nullable();
            $table->string('CBR_ID_CLASS_ORDER', 10)->nullable();
            $table->string('CBR_ID_CLASS', 10)->nullable();
            $table->string('STD_ID_WORK_UNIT', 8)->nullable();
            $table->string('CBR_ID_FORM_ACT', 40)->nullable();
            $table->float('CBR_Q_VACANCY', 15,5);
            $table->string('CBR_COMMENT', 254)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('FUNCOES_PRIVATIVAS');
    }
}