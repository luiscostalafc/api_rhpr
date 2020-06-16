<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class OpmMeta4Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement(
            'CREATE VIEW opm_meta4 AS
                SELECT 
                    "UNIDADE_META4" AS opm_meta4,
                    "DESCRICAO_META4" AS opm_description_meta4,
                    "ID_PAI" AS opm_asc_meta4,
                    "DESCRICAO_PAI" AS opm_asc_id,
                    "UNIDADE_PMPR" AS opm_pmpr,
                    "CD_LOCAL_TRABALHO" AS opm_resp,
                    "LOCAL_TRABALHO" AS address,
                    "DATA_INICIO" AS start_date,
                    "DATA_FIM" AS end_date,
                    "LOGRADOURO" AS street,
                    "BAIRRO" AS district,
                    "MUNICIPIO" AS city,
                    "CEP" AS cep,
                    "DDD" AS ddd,
                    "TELEFONE" AS phone
                from "OPM_IMP_META4"'
            );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement("DROP VIEW opm_meta4");
    }
}