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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->uuid('unique_id')->unique();
            $table->string('nombres');
            $table->string('apellidos')->nullable();
            $table->enum('genero', ['MASCULINO', 'FEMENINO'])->nullable();
            $table->string('telefono')->nullable()->unique();
            $table->string('telefono_emergencia')->nullable()->unique();
            $table->string('direccion')->nullable();
            $table->string('referencia')->nullable();
            $table->string('dni')->unique();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->dateTime('fecha_nacimiento')->nullable();
            $table->enum('estado', ['ACTIVO', 'INACTIVO', 'ELIMINADO'])->default('ACTIVO');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
            // $table->timestamps();

            $table->unsignedBigInteger('roles_id')->nullable();
            $table->unsignedBigInteger('distritos_id')->nullable();
            // $table->unsignedBigInteger('direcciones_id')->nullable();

            $table->foreign('roles_id')->references('id')->on('roles')->onDelete('set null');
            $table->foreign('distritos_id')->references('id')->on('distritos')->onDelete('set null');
            // $table->foreign('direcciones_id')->references('id')->on('direcciones')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
