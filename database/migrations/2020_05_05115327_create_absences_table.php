<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AbsencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement(
            'CREATE VIEW absences AS
                SELECT 
                    id,
                    "NOME" AS name,
                    "CODIGO" AS code,
                    "RG" AS rg,
                    "OPM_META4" AS opm_meta4,
                    "OPM_DESCRICAO" AS opm_description,
                    "COD_INCIDENTE" AS incident_code,
                    "DESC_INCIDENTE" AS incident_description,
                    "UNITS" AS amount,
                    "DT_INIC" AS start_date,
                    "DT_FIM" AS end_date
                FROM "AUSENCIA"'
            );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement("DROP VIEW absences");
    }
}