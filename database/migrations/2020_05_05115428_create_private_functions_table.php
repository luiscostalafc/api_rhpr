<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PrivateFunctionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement(
            'CREATE VIEW private_functions AS
                SELECT 
                    "CBR_ID_FUNC_PRIV" AS id,
                    "DT_START" AS start_date,
                    "DT_END" AS end_date,
                    "CBR_ID_FUNC" AS function_id,
                    "STD_ID_JOB_CODE" AS position,
                    "CBR_ID_CLASS_ORDER" AS group,
                    "CBR_ID_CLASS" AS subgroup,
                    "STD_ID_WORK_UNIT" AS opm_meta4,
                    "CBR_ID_FORM_ACT" AS form_act,
                    "CBR_Q_VACANCY" AS vacancy,
                    "CBR_COMMENT" AS observation
                from "FUNCOES_PRIVATIVAS"'
            );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement("DROP VIEW private_functions");
    }
}