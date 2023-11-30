<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('resources', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug');
            $table->text('description');

            $table->timestamps();
        });

        DB::table('resources')->insert([
            [
                'name' => 'Configurações',
                'slug' => 'configuracoes',
                'description' => 'Funcionalidade Configurações do site'
            ],
            [
                'name' => 'Usuários',
                'slug' => 'usuarios',
                'description' => 'Funcionalidade de Usuários'
            ],
            [
                'name' => 'Perfis',
                'slug' => 'perfis',
                'description' => 'Funcionalidade de Perfis'
            ],
        ]);

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('resources');
    }
};
