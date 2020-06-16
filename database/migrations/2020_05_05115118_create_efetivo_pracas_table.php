<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EfetivoPracasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('EFETIVO_PRACAS', function (Blueprint $table) {
            $table->string('UserRG', 22);
            $table->string('nome', 100);
            $table->string('graduacao', 8)->nullable();
            $table->string('quadro', 10)->nullable();
            $table->string('subquadro', 10)->nullable();
            $table->timestamp('inclusao_data', 0)->nullable();
            $table->string('opm', 62)->nullable();
            $table->string('referencia', 5)->nullable();
            $table->string('cdopm', 10)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('EFETIVO_PRACAS');
    }
}