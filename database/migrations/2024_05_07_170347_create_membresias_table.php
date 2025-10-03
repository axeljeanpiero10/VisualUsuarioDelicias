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
        Schema::create('membresias', function (Blueprint $table) {
            $table->id();
            $table->uuid('unique_id')->unique();
            $table->string('descripcion')->nullable();
            $table->string('forma_pago')->nullable();
            $table->date('fecha_inicio')->nullable();
            $table->date('fecha_fin')->nullable();
            
            $table->enum('estado', ['ACTIVO', 'INACTIVO','ELIMINADO'])->default('ACTIVO')->nullable();
            $table->timestamp('created_at')->useCurrent()->nullable();
            $table->timestamp('updated_at')->useCurrent()->nullable();
            // $table->timestamps();

            $table->unsignedBigInteger('users_id')->nullable();
            $table->unsignedBigInteger('paquetes_id')->nullable();

            $table->foreign('users_id')->references('id')->on('users')->onDelete('set null');
            $table->foreign('paquetes_id')->references('id')->on('paquetes')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('membresias');
    }
};
