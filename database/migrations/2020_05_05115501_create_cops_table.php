<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement(
            'CREATE VIEW cops AS
                SELECT 
                    "ID_META4" AS meta4_id,
                    "STD_OR_HR_PERIOD" AS period,
                    "DATA_ADMISSAO" AS admission_date,
                    "NOME" AS name,
                    "RG" AS rg,
                    "CLASSE" AS class,
                    "NASCIMENTO" AS birth_date,
                    "ID_SEXO" AS gender_id,
                    "SEXO" AS gender,
                    "ADMISSAO_REAL" AS admission_date_real,
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
                    "CDOPM" AS opm_code
                FROM "POLICIAL"'
            );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement("DROP VIEW cops");
    }
}