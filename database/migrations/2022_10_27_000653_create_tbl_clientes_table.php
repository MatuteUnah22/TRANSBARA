<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_clientes', function (Blueprint $table) {
            $table->integer('cod_cliente', true);
            $table->string('nom_cliente', 50);
            $table->string('rtn_cliente', 16)->nullable();
            $table->string('tel_cliente', 9)->nullable();
            $table->string('correo_cliente', 50);
            $table->date('fec_adicion');
            $table->string('usr_adicion', 25);
            $table->date('fec_modificacion');
            $table->string('usr_modificacion', 25)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_clientes');
    }
};
