<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EffectiveGraduatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement(
            'CREATE VIEW effective_graduates AS
                SELECT 
                    "UserRG" AS rg,
                    "nome" AS name,
                    "graduacao" AS position,
                    "quadro" AS group,
                    "subquadro" AS subgroup,
                    "inclusao_data" AS inclusion_date,
                    "opm" AS opm_description,
                    "referencia" AS reference,
                    "cdopm" AS opm_code
                from "EFETIVO_PRACAS"'
            );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement("DROP VIEW effective_graduates");
    }
}