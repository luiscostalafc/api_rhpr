<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class InactiveDependentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement(
            'CREATE VIEW inactive_dependents AS
                SELECT 
                    "RG" AS rg,
                    "nome" AS name,
                    "sexo" AS gender,
                    "data_nasc" AS birth_date,
                    "irpf" AS agreement,
                    "parentesco" AS kinship,
                    "dt_ini" AS start_date,
                    "dt_fim" AS end_date
                from "DEPENDENTES_INATIVO"');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement("DROP VIEW inactive_dependents");
    }
}