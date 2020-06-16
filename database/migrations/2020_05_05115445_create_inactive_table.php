<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class InactiveTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement(
            'CREATE VIEW inactive AS
                SELECT 
                    "STD_ID_HR" AS hr_id,
                    "STD_OR_RH_PERIOD" AS period,
                    "DT_INI_RH" AS start_date,
                    "ID_TIPO_RH" AS inactive_id,
                    "N_TIPO_RH" AS inactive_type,
                    "CBR_NUM_RG" AS rg,
                    "NOME" AS name,
                    "DT_NASC" AS birth_date,
                    "SEXO" AS gender,
                    "cargo" AS position,
                    "POSTO" AS group,
                    "N_RUA" AS street_type,
                    "N_TIPO_LOCAL_END" AS address_type,
                    "QUADRO" AS class,
                    "ORD_FONE" AS phone_id,
                    "N_TIPO_LOCAL_FONE" AS phone_local,
                    "N_TIPO_LINHA" AS phone_type,
                    "FONE" AS phone,
                    "END_LOGRADOURO" AS street,
                    "END_NUMERO" AS number,
                    "END_COMPL" AS complement,
                    "END_BAIRRO" AS district,
                    "END_CIDADE" AS city,
                    "END_CEP" AS cep
                from "INATIVOS"'
            );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement("DROP VIEW inactive");
    }
}