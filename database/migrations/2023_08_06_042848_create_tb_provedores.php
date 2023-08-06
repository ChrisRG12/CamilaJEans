<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tb_provedores', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->bigIncrements('idProvedor');
            $table->string('nombre');
            $table->string('correo');
            $table->biginteger('telefono');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_provedores');
    }
};
