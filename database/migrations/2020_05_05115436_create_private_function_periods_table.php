<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PrivateFunctionPeriodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement(
            'CREATE VIEW private_function_periods AS
                SELECT 
                    "STD_ID_HR" AS hr_id,
                    "STD_OR_HR_PERIOD_NUMBER" AS period,
                    "DT_START" AS start_date,
                    "DT_END" AS end_date,
                    "CBR_ID_FUNC_PRIV" AS function_id,
                    "CBR_ID_FORM_ACT" AS form_act,
                    "SCO_ID_REA_CHANG" AS change
                from "FUNC_PRIV"'
            );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement("DROP VIEW private_function_periods");
    }
}