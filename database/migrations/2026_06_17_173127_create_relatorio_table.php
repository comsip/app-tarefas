<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRelatorioTable extends Migration
{
    public function up()
    {
        Schema::create('relatorios', function (Blueprint $table) {
            $table->id();
            $table->string('tipo');
            $table->string('periodo');
            $table->date('data_geracao');
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('relatorios');
    }
}
