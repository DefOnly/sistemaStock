<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('producto', function (Blueprint $table) {
            $table->string('codigoPro', 20);
            $table->string('mombre',30);
            $table->integer('precio');
            $table->integer('stock');
            $table->string('descripcion',50);
            $table->integer('idCategoria');
            $table->primary('codigoPro');
            $table->foreign('idCategoria')->references('idCategoria')->on('categoria');
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
        Schema::dropIfExists('producto');
    }
}
