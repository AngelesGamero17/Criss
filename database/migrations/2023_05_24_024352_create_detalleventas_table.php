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
        Schema::create('detalleventas', function (Blueprint $table) {
            $table->id();
            $table->datetime('fecha');
            $table->string('costofinal');
            $table->string('nombre');
            $table->integer('cantidad');
            $table->float('costoProducto');

            $table->timestamps(); 
            
            $table->foreignId('id_productos')
	              ->nullable()
	              ->constrained('productos')
	              ->cascadeOnUpdate()
	              ->nullOnDelete();

            $table->foreignId('id_clientes')
	              ->nullable()
	              ->constrained('clientes')
	              ->cascadeOnUpdate()
	              ->nullOnDelete();


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detalleventas');
    }
};
