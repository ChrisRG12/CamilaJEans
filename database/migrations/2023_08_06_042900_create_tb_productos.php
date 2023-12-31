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
        Schema::create('tb_productos', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->bigIncrements('idProducto');
            $table->string('nombre');
            $table->integer('precio');
            $table->string('codigo');
            $table->string('stock');
            $table->unsignedBigInteger('provedor_id');
            $table->foreign('provedor_id')->references('idProvedor')->on('tb_provedores')->onDelete('cascade');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_productos');
    }
};
