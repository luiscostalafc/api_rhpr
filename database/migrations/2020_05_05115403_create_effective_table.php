<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EffectiveTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement(
            'CREATE VIEW effective AS
                SELECT 
                    "STD_ID_HR" AS meta4_id,
                    "STD_OR_HR_PERIOD" AS period,
                    "STD_DT_START" AS start_date,
                    "STD_N_FIRST_NAME" AS first_name,
                    "CBR_NUM_RG" AS rg,
                    "CBR_ID_FUNC_GRUOP" AS class,
                    "SUS_ID_WORK_CENTER" AS opm_id,
                    "STD_WORK_LOCBRA" AS opm_address,
                    "STD_ID_SUB_GEO_DIV" AS city_id,
                    "STD_N_SUB_GEO_DIV" AS city,
                    "SCO_ID_WORK_UNIT" AS opm_meta4,
                    "STD_N_WORK_UNITBRA" AS opm_description,
                    "STD_ID_JOB_CODE" AS position,
                    "CBR_ID_CLASS_ORDER" AS group,
                    "CBR_ID_CLASS" AS subgroup,
                    "CBR_ID_REFERENCE" AS reference_id,
                    "CBR_ID_FUNC" AS function_id,
                    "CBR_NM_FUNCBRA" AS function,
                    "STD_DT_BIRTH" AS birth_date,
                    "STD_ID_GENDER" AS gender_id,
                    "STD_N_GENDERBRA" AS gender,
                    "STD_EMAIL" AS email_meta4
                from "EFETIVO_PMPR"'
            );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement("DROP VIEW effective");
    }
}