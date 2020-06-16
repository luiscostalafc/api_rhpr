<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class HistoricalPoliceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement(
            'CREATE VIEW historical_police AS
                SELECT 
                    "SK_POLICIAL_HISTORICO" AS id,
                    "ID_META4" AS meta4_id,
                    "STD_OR_HR_PERIOD" AS period,
                    "DATA_ADMISSAO" AS admission_date,
                    "NOME" AS name,
                    "RG" AS rg,
                    "CLASSE" AS class,
                    "NASCIMENTO" AS birth_date,
                    "ID_SEXO" AS gender_id,
                    "SEXO" AS gender,
                    "ADMISSAO_REAL" AS admission_real_date,
                    "EMAIL_META4" AS email_meta4,
                    "FUNCAO" AS function,
                    "CARGO" AS position,
                    "QUADRO" AS group,
                    "SUBQUADRO" AS subgroup,
                    "PROMOCAO" AS promotion_date,
                    "REFERENCIA" AS reference,
                    "BAIRRO" AS district,
                    "CIDADE" AS city,
                    "OPM_DESCRICAO" AS opm_description,
                    "OPM_META4" AS opm_meta4,
                    "CDOPM" AS opm_code,
                    "dh_inicio" AS start_date,
                    "dh_fim" AS end_date
                FROM "POLICIAL_HISTORICO"'
            );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement("DROP VIEW historical_police");
    }
}