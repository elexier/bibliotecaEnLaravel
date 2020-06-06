<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaPermisoRol extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permiso_role', function (Blueprint $table) {
            $table->id();

            $table->bigInteger('role_id')->unsigned();
            $table->foreign('role_id', 'fk_permisorole_role')->references('id')->on('roles')->onDelete('restrict')->onUpdate('restrict');

            $table->bigInteger('permiso_id')->unsigned();
            $table->foreign('permiso_id', 'fk_permisorole_permiso')->references('id')->on('permisos')->onDelete('restrict')->onUpdate('restrict');

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
        Schema::dropIfExists('permiso_rol');
    }
}
