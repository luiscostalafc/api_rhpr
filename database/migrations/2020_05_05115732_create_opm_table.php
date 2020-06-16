<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class OpmTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement(
            'CREATE VIEW opm AS
                SELECT 
                    "META4" AS id,
                    "NOME_META4" AS meta4_id,
                    "CODIGO" AS opm_code,
                    "DESCRICAO" AS opm_description,
                    "ABREVIATURA" AS abbreviation,
                    "TIPO" AS type,
                    "MUNICIPIO" AS city,
                    "CDMUNICIPIO" AS city_code,
                    "TITULO" AS title,
                    "CODIGOBASE" AS base_code,
                    "CODIGONOVO" AS new_code,
                    "TELEFONE" AS phone
                FROM "opmPMPR"'
            );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement("DROP VIEW opm");
    }
}