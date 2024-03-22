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
        Schema::create('productos', function(Blueprint $table) {
            $table->id();
            $table->string('nombre_producto');
            $table->text('descripcion_producto');
            $table->string('medida_producto');
            $table->string('categoria');
            $table->decimal('precio', 10, 2); 
            $table->integer('stock');            
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productos');
    }
};
