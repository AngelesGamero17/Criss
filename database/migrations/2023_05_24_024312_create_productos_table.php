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
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre')->unique();
            $table->string('descripcion');
            $table->integer ('estado');
            $table->float('precio');
            $table->integer('stock');
            $table->string('imagen');
            
            
            $table->timestamps(); 
            
            $table->foreignId('id_categorias')
            ->nullable()
            ->constrained('categorias')
            ->cascadeOnUpdate()
            ->nullOnDelete();

            $table->foreignId('id_descuentos')
            ->nullable()
            ->constrained('descuentos')
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
        Schema::dropIfExists('productos');
    }
};
