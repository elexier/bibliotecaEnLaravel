<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaLibroPrestamo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('libro_prestamo', function (Blueprint $table) {
            $table->id();

            $table->bigInteger('usuario_id')->unsigned();            
            $table->foreign('usuario_id', 'fk_libroprestamo_usuario')->references('id')->on('usuarios')->onDelete('restrict')->onUpdate('restrict');

            $table->bigInteger('libro_id')->unsigned();            
            $table->foreign('libro_id', 'fk_libroprestamo_libro')->references('id')->on('libros')->onDelete('restrict')->onUpdate('restrict');

            $table->date('fecha_prestamo');
            $table->string('prestado_a', 100);
            $table->boolean('estado');
            $table->date('fecha_devolucion', 50)->nullable();

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
        Schema::dropIfExists('libro_prestamo');
    }
}
