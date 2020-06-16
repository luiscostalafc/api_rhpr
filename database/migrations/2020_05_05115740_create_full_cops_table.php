<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class FullCopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement(
            'CREATE VIEW full_cops AS
                SELECT 
                    "ID_META4" AS meta4_id,
                    "STD_OR_HR_PERIOD" AS start_date,
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
                    "PROMOCAO" AS promotion,
                    "REFERENCIA" AS reference,
                    "BAIRRO" AS district,
                    "CIDADE" AS city,
                    "OPM_DESCRICAO" AS opm_description,
                    "OPM_META4" AS opm_meta4,
                    "CDOPM" AS opm_code,
                    "nome_mae" AS mother_name,
                    "nome_pai" AS father_name,
                    "numero_titulo" AS title_number,
                    "zona" AS zone,
                    "secao" AS section,
                    "uf" AS uf,
                    "CPF" AS cpf,
                    "id"
                from "pm_cm"'
            );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement("DROP VIEW full_cops");
    }
}