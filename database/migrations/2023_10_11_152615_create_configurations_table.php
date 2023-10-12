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
        Schema::create('configurations', function (Blueprint $table) {
            $table->id();
            $table->string('key')->unique();
            $table->string('title');
            $table->string('description')->nullable();
            $table->string('value')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });

        // Inforações
        DB::table('configurations')->insert([
            'key' => 'titulo',
            'title' => 'Título do site',
        ]);

        DB::table('configurations')->insert([
            'key' => 'descricao',
            'title' => 'Descrição',
        ]);

        DB::table('configurations')->insert([
            'key' => 'copyright',
            'title' => 'copyright',
        ]);

        DB::table('configurations')->insert([
            'key' => 'email',
            'title' => 'E-mail',
        ]);

        DB::table('configurations')->insert([
            'key' => 'telefone',
            'title' => 'Telefone',
        ]);

        // SEO //
        DB::table('configurations')->insert([
            'key' => 'incorporacao_cabecalho',
            'title' => 'Incorporação de cabeçalho',
        ]);

        DB::table('configurations')->insert([
            'key' => 'incorporacao_rodape',
            'title' => 'Incorporação de rodapé',
        ]);

        // Imagens //
        DB::table('configurations')->insert([
            'key' => 'logo',
            'title' => 'Logo',
        ]);

        DB::table('configurations')->insert([
            'key' => 'favicon',
            'title' => 'Favicon',
        ]);

        DB::table('configurations')->insert([
            'key' => 'logo_radape',
            'title' => 'Logo Rodapé',
        ]);

        // Opções
        DB::table('configurations')->insert([
            'key' => 'manutencao',
            'title' => 'Modo de manutenção',
            'value' => false,
        ]);

        DB::table('configurations')->insert([
            'key' => 'exibir_versao',
            'title' => 'Exibir número da versão do site',
            'value' => true,
        ]);

        // Cores
        DB::table('configurations')->insert([
            'key' => 'cor_principal',
            'title' => 'Cor Principal',
        ]);

        DB::table('configurations')->insert([
            'key' => 'cor_titulos',
            'title' => 'Cor dos títulos',
        ]);

        DB::table('configurations')->insert([
            'key' => 'cor_botoes',
            'title' => 'Cor dos botões',
        ]);

        DB::table('configurations')->insert([
            'key' => 'cor_fundo_texto',
            'title' => 'Cor de fundos de texto',
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('configurations');
    }
};
