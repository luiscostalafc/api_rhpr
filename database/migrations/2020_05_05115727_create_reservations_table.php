<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement(
            'CREATE VIEW reservations AS
                SELECT 
                    "UserRG" AS rg,
                    "nome" AS name,
                    "posto" AS position,
                    "quadro" AS group,
                    "subquadro" AS subgroup,
                    "data" AS start_date,
                    "id"
                FROM "RESERVA"'
            );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement("DROP VIEW reservations");
    }
}