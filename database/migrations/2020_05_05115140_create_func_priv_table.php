<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class FuncPrivTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('FUNC_PRIV', function (Blueprint $table) {
            $table->string('STD_ID_HR', 9)->nullable();
            $table->float('STD_OR_HR_PERIOD_NUMBER', 15,5);
            $table->timestamp('DT_START', 0)->nullable();
            $table->timestamp('DT_END', 0)->nullable();
            $table->string('CBR_ID_FUNC_PRIV', 10)->nullable();
            $table->string('CBR_ID_FORM_ACT', 40)->nullable();
            $table->string('SCO_ID_REA_CHANG', 3)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('FUNC_PRIV');
    }
}