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
                'name' => 'Postagens',
                'slug' => 'postagens',
                'description' => 'Funcionalidade de postagens do site.'
            ],
            [
                'name' => 'Solicitações',
                'slug' => 'solicitacoes',
                'description' => 'Funcionalidade de solicitações de visitantes do site.'
            ],
            [
                'name' => 'Galeria de imagens',
                'slug' => 'galeria',
                'description' => 'Funcionalidade de galeria de imagens.'
            ],
            [
                'name' => 'Instagram',
                'slug' => 'instagram',
                'description' => 'Funcionalidade para cadastrar postagens do instagram.'
            ],
            [
                'name' => 'E-books',
                'slug' => 'ebooks',
                'description' => 'Funcionalidade para cadastro de e-books.'
            ],
            [
                'name' => 'Menus',
                'slug' => 'menus',
                'description' => 'Funcionalidade para cadastro de menus do site.'
            ],
            [
                'name' => 'Configurações',
                'slug' => 'configuracoes',
                'description' => 'Funcionalidade de configurações do site'
            ],
            [
                'name' => 'Usuários',
                'slug' => 'usuarios',
                'description' => 'Funcionalidade para cadastro de usuários'
            ],
            [
                'name' => 'Perfis',
                'slug' => 'perfis',
                'description' => 'Funcionalidade de para definir perfis de usuários e suas permissões'
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
