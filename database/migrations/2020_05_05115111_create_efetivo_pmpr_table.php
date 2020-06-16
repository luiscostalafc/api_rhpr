<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EfetivoPmprTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('EFETIVO_PMPR', function (Blueprint $table) {
            $table->string('STD_ID_HR', 9);
            $table->integer('STD_OR_HR_PERIOD');
            $table->timestamp('STD_DT_START', 0)->nullable();
            $table->string('STD_N_FIRST_NAME', 100)->nullable();
            $table->string('CBR_NUM_RG', 22)->nullable();
            $table->string('CBR_ID_FUNC_GRUOP', 10)->nullable();
            $table->string('SUS_ID_WORK_CENTER', 8)->nullable();
            $table->string('STD_WORK_LOCBRA', 62)->nullable();
            $table->string('STD_ID_SUB_GEO_DIV', 8)->nullable();
            $table->string('STD_N_SUB_GEO_DIV', 62)->nullable();
            $table->string('SCO_ID_WORK_UNIT', 8)->nullable();
            $table->string('STD_N_WORK_UNITBRA', 62)->nullable();
            $table->string('STD_ID_JOB_CODE', 8)->nullable();
            $table->string('CBR_ID_CLASS_ORDER', 10)->nullable();
            $table->string('CBR_ID_CLASS', 10)->nullable();
            $table->string('CBR_ID_REFERENCE', 10)->nullable();
            $table->string('CBR_ID_FUNC', 10)->nullable();
            $table->string('CBR_NM_FUNCBRA', 100)->nullable();
            $table->timestamp('STD_DT_BIRTH', 0)->nullable();
            $table->string('STD_ID_GENDER', 1)->nullable();
            $table->string('STD_N_GENDERBRA', 62)->nullable();
            $table->string('STD_EMAIL', 100)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('EFETIVO_PMPR');
    }
}