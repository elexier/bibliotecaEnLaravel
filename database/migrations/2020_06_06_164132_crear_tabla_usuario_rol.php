<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaUsuarioRol extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuario_role', function (Blueprint $table) {
            $table->id();
            $table->boolean('estado');

            $table->bigInteger('role_id')->unsigned();
            $table->foreign('role_id', 'fk_usariorole_role')->references('id')->on('roles')->onDelete('restrict')->onUpdate('restrict');

            $table->bigInteger('usuario_id')->unsigned();
            $table->foreign('usuario_id', 'fk_usuariorole_usuario')->references('id')->on('usuarios')->onDelete('restrict')->onUpdate('restrict');

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
        Schema::dropIfExists('usuario_rol');
    }
}
