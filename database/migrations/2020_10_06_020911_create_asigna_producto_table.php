<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAsignaProductoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asigna_producto', function (Blueprint $table) {
            $table->bigIncrements('idProducto');
            $table->string('codigoPro', 20);
            $table->integer('idSucursal');
            $table->integer('stock_sucursal');
            $table->foreign('codigoPro')->references('codigoPro')->on('producto');
            $table->foreign('idSucursal')->references('idSucursal')->on('sucursal');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('asigna_producto');
    }
}
