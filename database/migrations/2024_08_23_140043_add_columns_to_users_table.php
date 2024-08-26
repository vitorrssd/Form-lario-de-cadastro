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
        Schema::table('users', function (Blueprint $table) {
            $table->string('nome', 80)->after('id'); 
            $table->string('email', 80)->unique()->after('nome'); 
            $table->date('data_de_nascimento')->nullable()->after('email'); 
            $table->string('senha', 80)->after('data_de_nascimento'); 
            $table->string('repetir_senha', 80)->after('senha'); 
            $table->enum('sexo', ['Masculino', 'Feminino'])->after('repetir_senha'); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['nome', 'email', 'data_de_nascimento', 'senha', 'repetir_senha', 'sexo']);
        });
    }
};