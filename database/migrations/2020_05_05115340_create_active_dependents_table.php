<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ActiveDependentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement(
            'CREATE VIEW active_dependents AS
                SELECT 
                    "RG" AS rg,
                    "nome" AS name,
                    "sexo" AS gender,
                    "data_nasc" AS birth_date,
                    "irpf" AS agreement,
                    "parentesco" AS kinship,
                    "dt_ini" AS start_date,
                    "dt_fim" AS end_date
                FROM "DEPENDENTES_ATIVA"'
            );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement("DROP VIEW active_dependents");
    }
}